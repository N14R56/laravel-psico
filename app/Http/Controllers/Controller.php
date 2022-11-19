<?php

namespace App\Http\Controllers;

use App\UseCases\ConsultarBemEstar\EntitiesApplication\ConsultorBemEstar;
use App\UseCases\ResponderBemEstar\Adapters\Adapter;
use App\UseCases\ResponderBemEstar\Interactors\Interactor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function responderBemEstar(Request $request): Response
    {
        $adapter = new Adapter($request);

        $interactor = new Interactor(
            $adapter->inputContract->idFuncionario,
            $adapter->inputContract->data,
            $adapter->inputContract->bemEstar
        );

        return response(
            $interactor->dados,
            200
        );
    }

    public function consultarBemEstar(Request $request): Response
    {
        $adapter = new Adapter($request);

        $consultor = new ConsultorBemEstar(
            $adapter->inputContract->idFuncionario,
        );

        $exploded = explode(PHP_EOL, $consultor->dados);

        $size = count($exploded);

        foreach($exploded as $k => $v) {

            if ($k != $size - 1) {

                $exploded2 = explode(':', $v);
    
                $func[$k] = [
                    'id_funcionario' => $adapter->inputContract->idFuncionario,
                    'data' => $exploded2[0],
                    'bem_estar' => $exploded2[1]
                ];
            }
        }

        $response = [
            $adapter->inputContract->idFuncionario => $func
        ];

        return response(
            $response,
            200
        );
    }
}
