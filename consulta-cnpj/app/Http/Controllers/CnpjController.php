<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class CnpjController extends Controller
{
    public function index(string $cnpj) {

        $res = Http::get('https://brasilapi.com.br/api/cnpj/v1/'.$cnpj.'');
        return response($res);
    }
}
