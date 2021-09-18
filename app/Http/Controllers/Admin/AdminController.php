<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = "/admin";


    public function index()
    {
        return "merci pour la visite";
    }
}
