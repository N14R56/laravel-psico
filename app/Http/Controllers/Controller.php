<?php

namespace App\Http\Controllers;

use App\UseCases\ResponderBemEstar\Adapters\Adapter;
use App\UseCases\ResponderBemEstar\Interactors\Interactor;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
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
}
