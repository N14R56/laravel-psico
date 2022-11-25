<?php

namespace App\UseCases\ResponderBemEstar\EntitiesApplication;

use Illuminate\Support\Facades\DB;

class ArmazenadorBemEstar
{
    public function __construct(
        $idFuncionario,
        $data,
        $bemEstar
    )
    {
        DB::insert(
            "INSERT INTO bem_estar (id_funcionario, bem_estar, data) VALUES (?, ?, ?)",
            [$idFuncionario, $bemEstar, $data]
        );
    }
}
