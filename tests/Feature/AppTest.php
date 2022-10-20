<?php

namespace Tests\Feature;

use Tests\TestCase;

use function PHPUnit\Framework\assertIsString;
use function PHPUnit\Framework\assertNull;

class AppTest extends TestCase
{
    /**
     * GET /bem-vindos
     * {'bem-vindos' : 'Mensagem de boas-vindas'}
     * 
     * 200
     */
    public function test_0(): void
    {
        $url = '/bem-vindos';

        $response = $this->get($url);

        assertIsString($response->json()['bem-vindos']);

        $response->assertStatus(200);
    }

    /**
     * Resgata a pergunta a ser feita ao funcionario.
     * Funcionario existe.
     * 
     * GET /pergunta?funcionario_id=1
     *  {
     *      "funcionario_id":"1",
     *      "pergunta":"Como voc\u00ea est\u00e1 se sentindo hoje?"
     *  }
     * 
     *  201
     */
    public function test_1(): void
    {
        $url = '/pergunta?funcionario_id=1';

        $response = $this->get($url);

        assertIsString($response->json()['funcionario_id']);
        assertIsString($response->json()['pergunta']);

        $response->assertStatus(201);
    }

    /**
     * Resgata a pergunta a ser feita ao funcionario.
     * Funcionario nao existe, retorna uma pergunta default.
     * 
     * GET /pergunta?funcionario_id=dsadasda
     *  {
     *      "funcionario_id":null,
     *      "pergunta":"Como voc\u00ea est\u00e1 se sentindo hoje?"
     *  }
     * 
     *  200
     */
    public function test_2(): void
    {
        $url = '/pergunta?funcionario_id=';

        $response = $this->get($url);

        assertNull($response->json()['funcionario_id']);

        assertIsString($response->json()['pergunta']);

        $response->assertStatus(200);
    }

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
    public function test_3(): void
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

    /**
     * Resgata o qrcode do funcionario.
     * 
     * GET /resposta
     *  {
     *      "funcionario_id" : 1,
     *  }
     * 
     * 201
     */
    public function test_4(): void
    {
        $url = '/qrcode?funcionario_id=1';

        $response = $this->get(
            $url
        );
    
        $response->assertStatus(201);
    }

    /**
     * Cria o qrcode do funcionario
     * 
     * POST /resposta
     *  {
     *      "funcionario_id" : 1,
     *  }
     * 
     *  200
     */
    public function test_5(): void
    {
        $url = '/qrcode';

        $body = [
            'funcionario_id' => 1
        ];

        $response = $this->post(
            $url,
            $body
        );
    
        $response->assertStatus(200);
    }

    /**
     * Cria as dicas para o funcionario
     * 
     * POST /resposta
     *  {
     *      "funcionario_id" : 1,
     *  }
     * 
     * 200
     */
    public function test_6(): void
    {
        $url = '/dica';

        $body = [
            'funcionario-id' => 1,
            'bem-estar' => 1,
            'dica' => 'Tire um day-off, o seu gestor já foi informado.'
        ];

        $response = $this->post(
            $url,
            $body
        );
    
        $response->assertStatus(200);
    }

    /**
     * Cria as dicas para o funcionario
     * 
     * GET /dica?funcionario-id=1&bem-estar=1
     *  {
     *      "funcionario_id" : 1,
     *  }
     * 
     * 201
     */
    public function test_7(): void
    {
        $url = '/dica?funcionario-id=1&bem-estar=1';

        $response = $this->get(
            $url
        );
    
        $response->assertStatus(200);
    }
}
