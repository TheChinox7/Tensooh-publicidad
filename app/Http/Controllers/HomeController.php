<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('aboutus');
    }

    public function contact()
    {
        return view('contacto');
    }

    public function mensaje()
    {
       $correo = new ContatoMail;
    }

}
