<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

use App\Services\HttpService;

class ConsultaCnpjService {

    public function getCnpj(string $cnpj): Array {
        $httpService = new HttpService('GET', 'https://brasilapi.com.br', '/api/cnpj/v1/'.$cnpj);

        $response = $httpService->httpService();

        return $response;
    }
}