<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;
use Illuminate\Support\Facades\Mail;

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
       $correo = new ContactoMail;
    }

}
