<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateStatusTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function guests_not_create_status(Type $var = null)
    {
       $response = $this->post(route('statuses.store'), ['body' => 'afegir status']);

       dd($response->content());

       $response->assertRedirect('login');
    }

    public function create_statuses()
    {
        $this->withoutExceptionHandling();
        //1.Given => amb usuari autentificat, crear context
        $user = factory(User::class)->create(['name' => 'botUser' ]);
        $this->actingAs($user);

        //2.When => realitza post request a status
        $response = $this->post(route('statuses.store'), ['body' => 'afegir status']);
        
        $response->assertJson([
            'body' => 'afegir status'
        ]);

        //$response->assertRedirect('/'); //després de crear stat redirecciona al inici també afegit en StatusesController
        //3. Then
        //Crear taula statuses
        $response = $this->assertDatabaseHas('statuses', [
            'user_id' => $user->id,
            'body' => 'afegir status'
        ]);
        

        $response->assertStatus(200);
    }
}
