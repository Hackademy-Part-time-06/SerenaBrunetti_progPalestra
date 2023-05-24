<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public static $courses = [
        [
            "name" => "Crossfit",
            "orario" => "18.30",
            "prezzo" => "€25,00/lezione",
            "durata" => "50 min",
            "img" => "https://media.istockphoto.com/id/1149241542/photo/young-man-exercising-using-battle-rope.jpg?s=612x612&w=0&k=20&c=jR8cJI5sGOh307gLK64C0KbJeMN4M0ZB2pKAjblkwbA="
        ],
        [
            "name" => "Aerobica",
            "orario" => "20.30",
            "prezzo" => "€30,00/lezione",
            "durata" => "52 min",
            "img" => "https://blogunisalute.it/wp-content/uploads/2021/06/attivita-aerobica.jpg"
        ],

        [
            "name" => "Salto con l'asta",
            "orario" => "15.30",
            "prezzo" => "€354,00/lezione",
            "durata" => "25 min",
            "img" => "https://sprintnews.it/wp-content/uploads/2020/08/Meeting-de-la-Tchaux-champsseries-47.jpg"
        ],

    ];

    public function homepage()
    {
        return view('homepage');
    }

    public function corsiDisponibili()
    {
        return view('corsiDisponibili', ['corsi' => self::$courses]);
    }

    public function dettagliCorso($name)
    {
        foreach (self::$courses as $course) {
            if ($course['name'] == $name) {
                return view('dettagliCorso', ['nome' => $name], ['corso' => $course]);
            }
        }
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function send(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "text" => "required",
        ]);

        $data = [
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "text" => $request->input('message'),
        ];

        Mail::to($request->input('email'))->send(new InfoMail($data));
        return redirect()->route('email');
        //dd($request->all());
    }

    public function email()
    {
        return view('send.email');
    }
}
