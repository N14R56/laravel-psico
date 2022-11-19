<?php

namespace Tests\Feature;

use Tests\TestCase;

use function PHPUnit\Framework\assertIsString;
use function PHPUnit\Framework\assertNull;

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
        $url = '/bem-estar';

        $body = [
            "id_funcionario" => "1",
            "data" => "18/11/2022",
            "bem_estar" => "5"
        ];

        $response = $this->post(
            $url,
            $body
        );

        $response->assertStatus(200);
    }
}
