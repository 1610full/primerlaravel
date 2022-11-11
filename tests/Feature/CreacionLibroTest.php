<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreacionLibroTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_inserta()
    {
        $response = $this->post('/libros', [
            'nombre' => 'test',
            'autor' => 'testautor',
            'editorial' => 'testedit',
            'ano_de_publicacion' => '1997',
            'paginas' => '6',
            'precio' => '40',
            'stock' => '0',
        ]);

        // $response->assertStatus(200);

        $this->assertDatabaseHas('productos', [
            "nombre"=> "test",
            "autor"=> "testautor",
            "editorial"=> "testedit",
            "ano_de_publicacion"=> "1997",
            "mes_de_publicacion"=> null,
            "tipo_de_publicacion"=> null,
            "pais"=> null,
            "paginas"=> 6,
            "descripcion"=> null,
            "precio"=> "40.00",
            "stock"=> 0,
        ]);
    }

    public function test_no_inserta()
    {
        $response = $this->post('/libros', [
            'nombre' => 'test',
            'autor' => 'testautor',
            'editorial' => 'testedit',
            'ano_de_publicacion' => '1997',
            'paginas' => '6',
            'precio' => '40',
            'stock' => '-1',
        ]);

        // $response->assertStatus(200);

        $this->assertDatabaseMissing('productos', [
            "nombre"=> "test",
            "autor"=> "testautor",
            "editorial"=> "testedit",
            "ano_de_publicacion"=> "1997",
            "mes_de_publicacion"=> null,
            "tipo_de_publicacion"=> null,
            "pais"=> null,
            "paginas"=> 6,
            "descripcion"=> null,
            "precio"=> "40.00",
            "stock"=> -1,
        ]);
    }
}
