<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMaileble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SEO;

class HomeController extends Controller
{
    public function index()
    {
        SEO::setTitle('Tensooh Media');
        SEO::setDescription('Somos Más Que Una Empresa, Somos Una Familia.! Durante 15 años hemos realizado grandes proyectos de la mano de nuestros clientes, a
        quienes agradecemos su confianza y compañía durante todo este tiempo.
        Estamos comprometidos con la realización de trabajos con los más altos estándares de
        calidad en la publicidad OOH, caracterizándonos por ser una empresa sólida y con
        experiencia en el mercado nacional.
        Creamos nuestras propias estructuras con un equipo de creativos diseñadores,
        departamento de logística, impresión y metal mecánica.');
        SEO::opengraph()->setUrl('http://tensooh.com');
        SEO::setCanonical('https://tensooh.com');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@tensooh');

        return view('welcome');
    }

    public function about()
    {
        SEO::setTitle('Tensooh Media');
        SEO::setDescription('Somos Más Que Una Empresa, Somos Una Familia.! Durante 15 años hemos realizado grandes proyectos de la mano de nuestros clientes, a
        quienes agradecemos su confianza y compañía durante todo este tiempo.
        Estamos comprometidos con la realización de trabajos con los más altos estándares de
        calidad en la publicidad OOH, caracterizándonos por ser una empresa sólida y con
        experiencia en el mercado nacional.
        Creamos nuestras propias estructuras con un equipo de creativos diseñadores,
        departamento de logística, impresión y metal mecánica.');
        SEO::opengraph()->setUrl('http://tensooh.com');
        SEO::setCanonical('https://tensooh.com');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@tensooh');

        return view('aboutus');
    }

    public function contact()
    {
        SEO::setTitle('Tensooh Media');
        SEO::setDescription('Somos Más Que Una Empresa, Somos Una Familia.! Durante 15 años hemos realizado grandes proyectos de la mano de nuestros clientes, a
        quienes agradecemos su confianza y compañía durante todo este tiempo.
        Estamos comprometidos con la realización de trabajos con los más altos estándares de
        calidad en la publicidad OOH, caracterizándonos por ser una empresa sólida y con
        experiencia en el mercado nacional.
        Creamos nuestras propias estructuras con un equipo de creativos diseñadores,
        departamento de logística, impresión y metal mecánica.');
        SEO::opengraph()->setUrl('http://tensooh.com');
        SEO::setCanonical('https://tensooh.com');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@tensooh');

        return view('contacto');
    }

    public function mensaje(Request $request)
    {
        $correo = new ContactoMaileble($request->all());
        Mail::to('info@tensooh.com')->send($correo);

        return view('contacto');

    }
}
