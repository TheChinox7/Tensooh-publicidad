<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;
use Illuminate\Support\Facades\Mail;
use SEO;

class HomeController extends Controller
{
    public function index()
    {
        SEO::setTitle('Tensooh Media');
        SEO::setDescription('Somos Más Que Una Empresa, Somos Una Familia.!');
        SEO::opengraph()->setUrl('http://tensooh.com');
        SEO::setCanonical('https://tensooh.com');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@tensooh');

        return view('welcome');
    }

    public function about()
    {
        SEO::setTitle('Tensooh Media');
        SEO::setDescription('Somos Más Que Una Empresa, Somos Una Familia.!');
        SEO::opengraph()->setUrl('http://tensooh.com');
        SEO::setCanonical('https://tensooh.com');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@tensooh');

        return view('aboutus');
    }

    public function contact()
    {
        SEO::setTitle('Tensooh Media');
        SEO::setDescription('Somos Más Que Una Empresa, Somos Una Familia.!');
        SEO::opengraph()->setUrl('http://tensooh.com');
        SEO::setCanonical('https://tensooh.com');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@tensooh');

        return view('contacto');
    }

    public function mensaje()
    {
       $correo = new ContactoMail;
    }

}
