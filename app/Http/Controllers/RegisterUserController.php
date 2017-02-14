<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

/**
 * Class RegisterUserController
 * @package App\Http\Controllers
 */
class RegisterUserController extends Controller
{

    public function register()
    {
        $user = new \App\User();
        $user->name = 'Pepito Palotes';
        $user->email = 'pmartinez1085@gmail.com';
        event(new Registered($user));
        dump("Done!");
    }


}
