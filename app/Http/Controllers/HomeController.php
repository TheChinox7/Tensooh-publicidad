<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
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

    public function mensaje(Request $request)
    {


        $this->validate($request, [


            'name' => 'required',

            'telephone' => 'required',

            'email' => 'required|email',

            'empresa' => 'required',

            'message' => 'required'


        ]);





        ContactUs::create($request->all());


        Mail::send(
            'email',


            array(


                'name' => $request->get('name'),

                'telephone' => $request->get('telephone'),

                'email' => $request->get('email'),

                'empresa' => $request->get('empresa'),

                'message' => $request->get('message')


            ),
            function ($message) {


                $message->from('jino0000morales0000@gmail.com');


                $message->to('user@example.com', 'Admin')


                    ->subject('Contact Form Query');
            }
        );


        return back()->with('success', 'Thanks for contacting us!');
        /*
        if ($_POST) {
            $name = $_POST["name"];

            $telephone = $_POST["telephone"];

            $email = $_POST["email"];

            $empresa = $_POST["empresa"];

            $message = $_POST["message"];

            $EmailTo = "jino0000morales0000@gmail.com";
            $Subject = "New message";


            $Body = "";
            $Body .= "Nombre: ";
            $Body .= $name;
            $Body .= "\n";
            $Body .= "Telefono: ";
            $Body .= $telephone;
            $Body .= "\n";
            $Body .= "Email: ";
            $Body .= $email;
            $Body .= "\n";
            $Body .= "Empresa: ";
            $Body .= $empresa;
            $Body .= "\n";
            $Body .= "Mensaje: ";
            $Body .= $message;
            $Body .= "\n";
        }*/
    }
}
