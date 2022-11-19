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
     *      "funcionario_id" : 1,
     *      "bem-estar" : 1
     *  }
     * 
     *  200
     *  {
     *      "dica" : "Tire um day-off, o seu gestor já foi informado." 
     *  }
     */
    public function test_1(): void
    {
        $url = '/bem-estar';

        $body = [
            'funcionario_id' => 1,
            'bem-estar' => 1,
        ];

        $response = $this->post(
            $url,
            $body
        );
        

        assertIsString($response->json()['dica']);
        $response->assertStatus(200);
    }
}
