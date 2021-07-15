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
    public function cnpjAccepted()
    {
        $response = $this->get('/api')
        ->assert
    }
}
