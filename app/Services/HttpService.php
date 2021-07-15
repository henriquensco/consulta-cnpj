<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class HttpService
{

    private $method;
    private $url;
    private $path;

    public function __construct(string $method, string $url, string $path)
    {

        $this->method = $method;
        $this->url = $url;
        $this->path = $path;
    }

    public function httpService(array $data = []): Array
    {

        $guzzle = new Client(['base_uri' => $this->url]);
        $request = $guzzle->request($this->method, $this->path, [
            'json' => $data,
            'timeout' => 30,
            'http_errors' => false,
        ]);


        $statusCode = $request->getStatusCode();

        $response = [
            'statusCode'=>$statusCode,
            'data'=>json_decode($request->getBody(), true)
        ];

        return $response;
    }
}