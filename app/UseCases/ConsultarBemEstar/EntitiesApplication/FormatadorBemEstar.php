<?php

namespace App\UseCases\ConsultarBemEstar\EntitiesApplication;

class FormatadorBemEstar
{
    public array $dadosFormatados;

    public function __construct(
        string $dados,
        int $idFuncionario
    )
    {
        $exploded = explode(PHP_EOL, $dados);

        $size = count($exploded);

        foreach($exploded as $k => $v) {

            if ($k != $size - 1) {

                $exploded2 = explode(':', $v);
    
                $func[$k] = [
                    'id_funcionario' => $idFuncionario,
                    'data' => $exploded2[0],
                    'bem_estar' => $exploded2[1]
                ];
            }
        }

        $this->dadosFormatados = [
            $idFuncionario => $func
        ];
    }
}
