<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Contacto1234Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_contacto1234()
    {
        $response = $this->get('/contacto/1234');

        $response->assertStatus(200);
        $response->assertSee('Jose');
        $response->assertSee('jose@ejemplo.com');
    }
}
