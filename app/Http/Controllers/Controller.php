<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function bem_vindos(Request $request): Response
    {
        return response(
            [
                'bem-vindos' => 'Essa é a api-web responsável pelo backend da aplicação mobile de Desenvolvimento Mobile.'
            ],
            200
        );
    }

    public function pergunta(Request $request): Response
    {
        if (null !== $request->get('funcionario_id')) {

            $status = 201;

        } else {

            $status = 200;

        }

        return response(
            [
                'funcionario_id' => $request->get('funcionario_id'),
                'pergunta' => 'Como você está se sentindo hoje?'
            ],
            $status
        );
    }

    public function bemEstar(Request $request): Response
    {
        return response(
            ["dica" => "Tire um day-off, o seu gestor já foi informado."] ,
            200
        );
    }

    public function qrcode(Request $request): Response
    {
        $url = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=funcionario1';

        if (null !== $request->post('funcionario_id')) {
            
            $status = 200;

        } else {
            
            $status = 201;

        }

        return response(
            ['url' => $url],
            $status
        );
    }

    public function dica(Request $request): Response
    {
        if (null !== $request->post('funcionario-id')) {

            $body = '';

            $status = 200;

        } else {
            
            $body = [
                'dica' => 'Tire um day-off, o seu gestor já foi informado.'
            ];

            $status = 200;

        }

        return response(
            $body,
            $status
        );
    }
}
