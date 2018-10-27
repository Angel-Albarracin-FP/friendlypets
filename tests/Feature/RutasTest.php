<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RutasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInicio()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAvisos()
    {
        $response = $this->get('/avisos');

        $response->assertStatus(200);
    }

    public function testNoticias()
    {
        $response = $this->get('/noticias');

        $response->assertStatus(200);
    }

}
