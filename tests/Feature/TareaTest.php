<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Tarea;
use Tests\TestCase;

class TareaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_insertar()
    {
        $response = $this->post('/api/insertar/',[ "titulo" => "Hola", "contenido" => "Soy yo", "estado" => "En Proceso", "autor" => "Natalia"]);
        $response->assertStatus(201);
        $response->assertJsonCount(8);
        $this->assertDatabaseHas('tareas', [
            'titulo' => 'Hola',
            'contenido' => 'Soy yo',
            'estado' => 'En Proceso',
            'autor' => 'Natalia',
        ]);

    }

}
