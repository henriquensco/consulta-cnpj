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
        $response = $this->get('/api/1913124300019');

        if((int)$response->status() != 200) {
            $this->assertTrue(false);
        } else {
            $this->assertTrue(true);
        }
    }

}
