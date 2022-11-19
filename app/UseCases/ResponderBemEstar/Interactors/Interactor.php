<?php

namespace App\UseCases\ResponderBemEstar\Interactors;

use App\UseCases\ResponderBemEstar\EntitiesApplication\ArmazenadorBemEstar;
use App\UseCases\ConsultarBemEstar\EntitiesApplication\ConsultorBemEstar;

class Interactor
{
    public string $dados;

    public function __construct(
        $idFuncionario,
        $data,
        $bemEstar
    )
    {

        new ArmazenadorBemEstar(
            $idFuncionario,
            $data,
            $bemEstar
        );

        $consultor = new ConsultorBemEstar(
            $idFuncionario
        );

        $this->dados = $consultor->dados;
    }
}