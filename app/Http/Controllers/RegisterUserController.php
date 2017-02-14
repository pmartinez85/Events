<?php

namespace App\Http\Controllers;

use App\Events\NewRegisteredUserEvent;

/**
 * Class RegisterUserController
 * @package App\Http\Controllers
 */
class RegisterUserController extends Controller
{
    public function registerUser(){

        event(new NewRegisteredUserEvent());
    }
}
