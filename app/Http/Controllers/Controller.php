<?php

namespace App\Http\Controllers;

use App\UseCases\CadastrarFuncionarios\Adapters\HttpAdapter;
use App\UseCases\CadastrarFuncionarios\EntitiesApplication\ArmazenadorFuncionario;
use App\UseCases\ConsultarBemEstar\EntitiesApplication\ConsultorBemEstar;
use App\UseCases\ConsultarFuncionarios\EntitiesApplication\ConsultorFuncionarios;
use App\UseCases\ResponderBemEstar\Adapters\Adapter;
use App\UseCases\ResponderBemEstar\EntitiesApplication\ArmazenadorBemEstar;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function responderBemEstar(Request $request): Response
    {
        new ArmazenadorBemEstar(
            $request->get('id_funcionario'),
            $request->get('data'),
            $request->get('bem_estar')
        );

        $consultor = new ConsultorBemEstar();

        return response(
            $consultor->dados,
            200
        );
    }

    public function consultarBemEstar(Request $request): Response
    {
        $consultor = new ConsultorBemEstar();

        return response(
            $consultor->dados,
            200
        );
    }

    public function cadastrarFuncionarios(Request $request): Response
    {
        new ArmazenadorFuncionario(
            $request->get('nome'),
            $request->get('setor')
        );

        $consultor = new ConsultorFuncionarios();

        return response(
            $consultor->dados,
            200
        );
    }

    public function consultarFuncionarios(Request $request): Response
    {
        $consultor = new ConsultorFuncionarios();

        return response(
            $consultor->dados,
            200
        );
    }
}
