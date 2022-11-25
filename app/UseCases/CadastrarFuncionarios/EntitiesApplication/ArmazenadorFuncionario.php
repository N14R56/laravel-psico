<?php

namespace App\UseCases\CadastrarFuncionarios\EntitiesApplication;

use Illuminate\Support\Facades\DB;

class ArmazenadorFuncionario
{
    public string $dados;

    public function __construct(
        $nome,
        $setor
    )
    {
        DB::insert(
            "INSERT INTO funcionarios (nome, setor) VALUES (?, ?)",
            [$nome, $setor]
        );
    }
}
