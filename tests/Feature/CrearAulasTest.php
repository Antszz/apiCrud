<?php

namespace Tests\Feature;

use App\Aula;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrearAulasTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function testUsersCanCreateAulas()
    {
        $response = $this->json('GET', 'aulas.index');
        $response
            ->assertStatus(201)
            ->assertExactJson([
                'created' => true,
            ]);
    }
}
