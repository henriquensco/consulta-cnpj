<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConsultaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_cnpj_accepted()
    {
        $response = $this->json('GET', '/api/19131243000197');

        $response
            ->assertStatus(200)
            ->assertJsonPath('statusCode', 200);
       
    }

}
