<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
   /** @test */
   function it_welcome_users_with_nickname()
   {
       $this->get('/saludo/diego/many')
           ->assertStatus(200)
           ->assertSee('Bienvenido Diego, tu nickname es: many');
   }
   /** @test */
   function it_welcome_users_without_nickname()
   {
       $this->get('/saludo/diego')
           ->assertStatus(200)
           ->assertSee('Bienvenido Diego');
   }
}
