<?php

namespace App\Http\Controllers;

use App\Listeners\NewRegisteredUserEvent;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function registeruser(){

        event(new NewRegisteredUserEvent());
    }
}
