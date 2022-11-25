<?php

namespace App\UseCases\CadastrarFuncionarios\Adapters;

use App\UseCases\CadastrarFuncionarios\Contracts\InputContract;
use Illuminate\Http\Request;

class HttpAdapter
{
    public InputContract $inputContract;

    public function __construct(
        Request $request
    )
    {
        $this->setInputContract($request);
    }

    private function setInputContract(Request $request)
    {
        $this->inputContract = new InputContract;
        $this->inputContract->nome = $request->post('nome');
        $this->inputContract->setor = $request->post('setor');
    }
}