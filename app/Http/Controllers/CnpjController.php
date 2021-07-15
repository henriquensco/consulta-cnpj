<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ConsultaCnpjService;

class CnpjController extends Controller
{
    private $consultaCnpjService;

    public function __construct() {
        $this->consultaCnpjService = new ConsultaCnpjService();
    }

    public function getCnpj(string $cnpj): Object {

        $response = $this->consultaCnpjService->getCnpj($cnpj);

        return response()->json($response);


    }
}
