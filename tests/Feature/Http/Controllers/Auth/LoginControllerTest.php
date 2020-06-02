<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function login_displays_the_login_form()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function login_displays_validation_errors()
    {
        $response = $this->post('/login', []);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    public function register_creates_and_authenticates_a_user()
    {
        $response = $this->post('register', [
            'dtb_id' => 16700001,
            'firstname' => 'Boris',
            'name' => 'Becker',
            'nickname' => 'Bobbele',
            'birthday' => '1967-11-22',
            'tel_private' => '040 12345678',
            'tel_mobile' => '0171 2345678',
            'email' => 'boris.b@tennis.de',
            'password' => 'derwarnochdrauf',
            'password_confirmation' => 'derwarnochdrauf',
        ]);

        $response->assertRedirect(route('home'));

        $this->assertDatabaseHas('users', [
            'dtb_id' => 16700001,
            'firstname' => 'Boris',
            'name' => 'Becker',
            'nickname' => 'Bobbele',
            'birthday' => '1967-11-22',
            'tel_private' => '040 12345678',
            'tel_mobile' => '0171 2345678',
            'email' => 'boris.b@tennis.de',
            'password' => 'derwarnochdrauf',
            'password_confirmation' => 'derwarnochdrauf',
        ]);
    }
}
