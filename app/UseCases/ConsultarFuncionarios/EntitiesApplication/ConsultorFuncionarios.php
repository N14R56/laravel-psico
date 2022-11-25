<?php

namespace App\UseCases\ConsultarFuncionarios\EntitiesApplication;

use Illuminate\Support\Facades\DB;

class ConsultorFuncionarios
{
    public array $dados;

    public function __construct()
    {
        $this->dados = DB::select(
            "SELECT * FROM funcionarios"
        );
    }
}
