<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_shows_the_users_list()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Mary')
            ->assertSee('Bill');

    }
    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No existen usuarios registrados');

    }
    /** @test */
    function it_loads_the_users_details_page()
    {
        $this->get('/usuario/5')
            ->assertStatus(200)
            ->assertSee('Hola usuario: 5');
    }
    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}
