<?php

namespace Tests\Feature\Http\Controllers\Auth;
use Tests\TestCase;
use App\User;
use Illuminate\Support\Facades\Session;

class LoginControllerTest extends TestCase
{
    public function testLogin()
    {
        Session::start();
        $user = factory(User::class)->create();
        $credential = [
            'email' => $user->email,
            'password' => $user->password,
            'X-Requested-With' => 'XMLHttpRequest'
        ];
        $response = $this->post('/login',$credential);  
        // $response->assertEquals(302, $response->getStatusCode());
        echo $response->getStatusCode();
        
    }
    // public function testReg()
    // {
    //     $user = factory(User::class)->make();
    //     $credential = [
    //         'first_name' => $user->first_name,
    //         'last_name' => $user->last_name,
    //         'email' => $user->email,
    //         'password' => $user->password,
    //         'phone' => $user->phoneNumber,
    //         'remember_token' => $user->remember_token

    //     ];
    //     $response = $this->post('/register',$credential, ['HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest']);

    //     $response->assertOk();  
    // }
}
