<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AppTest extends TestCase
{

    /**
     * Salva a resposta do usuario a barra de bem-estar
     * 
     * POST /bem-estar
     *  {
     *      "id_funcionario" : "1",
     *      "data" : "18/11/2022",
     *      "bem_estar" : "4"
     *  }
     * 
     *  200
     */
    public function test_1(): void
    {
        // $url = '/bem-estar';

        // $body = [
        //     "id_funcionario" => "1",
        //     "data" => "18/11/2022",
        //     "bem_estar" => "5"
        // ];

        // $response = $this->post(
        //     $url,
        //     $body
        // );

        // $response->assertStatus(200);

        // DB::insert(
        //     "INSERT INTO funcionarios (nome, setor) VALUES (?, ?)",
        //     ['Matheus Murray', 'Software Engineerig']
        // );

        // DB::insert(
        //     "INSERT INTO funcionarios (nome, setor) VALUES (?, ?)",
        //     ['João Augusto', 'Inside Sales']
        // );

        // DB::insert(
        //     "INSERT INTO funcionarios (nome, setor) VALUES (?, ?)",
        //     ['Anderson Joaquin', 'Contabilidade']
        // );

        // $re = DB::select(
        //     "SELECT * FROM funcionarios"
        // );

        DB::insert(
            "INSERT INTO bem_estar (id_funcionario, bem_estar, data) VALUES (?, ?, ?)",
            [1, 3, '10/01/2022']
        );

        DB::insert(
            "INSERT INTO bem_estar (id_funcionario, bem_estar, data) VALUES (?, ?, ?)",
            [1, 4, '10/02/2022']
        );

        DB::insert(
            "INSERT INTO bem_estar (id_funcionario, bem_estar, data) VALUES (?, ?, ?)",
            [2, 5, '10/03/2022']
        );

        $re = DB::select(
            "SELECT * FROM bem_estar"
        );

        dd($re);
    }
}
