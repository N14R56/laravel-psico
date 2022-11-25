<?php

namespace App\UseCases\ResponderBemEstar\Interactors;

use App\UseCases\ResponderBemEstar\EntitiesApplication\ArmazenadorBemEstar;
use App\UseCases\ConsultarBemEstar\EntitiesApplication\ConsultorBemEstar;

class Interactor
{
    public array $dados;

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

        $consultor = new ConsultorBemEstar();

        $this->dados = $consultor->dados;
    }
}