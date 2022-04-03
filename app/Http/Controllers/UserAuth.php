<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;
class UserAuth extends Controller
{
    public function index()
    {
        event( new UserCreated("your Account Has been send"));
    }
}
