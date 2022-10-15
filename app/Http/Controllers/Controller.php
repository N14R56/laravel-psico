<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function bem_vindos(Request $request): Response
    {
        return response(
            [
                'bem-vindos' => 'Essa e a api-web responsavel pelo backend da aplicacao mobile de Desenvolvimento Web.'
            ]
        );
    }
}
