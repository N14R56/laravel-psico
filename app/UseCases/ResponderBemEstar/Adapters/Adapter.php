<?php

namespace App\UseCases\ResponderBemEstar\Adapters;

use App\UseCases\ResponderBemEstar\Contracts\InputContract;
use Illuminate\Http\Request;

class Adapter
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
        $this->inputContract->idFuncionario = $request->get('id_funcionario');
        $this->inputContract->data = $request->get('data');
        $this->inputContract->bemEstar = $request->get('bem_estar');
    }
}