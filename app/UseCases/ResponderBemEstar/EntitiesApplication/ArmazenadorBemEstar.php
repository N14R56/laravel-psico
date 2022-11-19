<?php

namespace App\UseCases\ResponderBemEstar\EntitiesApplication;

class ArmazenadorBemEstar
{
    public function __construct(
        $idFuncionario,
        $data,
        $bemEstar
    )
    {
        file_put_contents(
            "funcionarios/id.{$idFuncionario}.txt",
            $data . ':' . $bemEstar . PHP_EOL,
            FILE_APPEND
        );
    }
}
