<?php

namespace App\UseCases\ConsultarBemEstar\EntitiesApplication;

class ConsultorBemEstar
{
    public string $dados;

    public function __construct(
        $idFuncionario
    )
    {
        $this->dados = file_get_contents(
            "funcionarios/id.{$idFuncionario}.txt"
        );
    }
}
