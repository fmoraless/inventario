<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_guest_user_can_see_login_page()
    {
        //$this->withoutExceptionHandling();

        $response = $this->get('/admin/login');

        $response->assertSee('INV-SYS');

    }

    /** @test */
    public function an_admin_user_can_do_login()
    {
        $this->withoutExceptionHandling();
        $user = User::find(1);
        $response = $this->get('/admin/login');
        $this->actingAs($user);
        $this->dd($user);
        $response->assertSee('Bienvenido a Voyager');

    }


}
