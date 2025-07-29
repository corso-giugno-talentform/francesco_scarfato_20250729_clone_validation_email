<?php

namespace App\Http\Controllers;

use App\Mail\SendAdminMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function product($productId)
    {
        return view('/product-detail', [
            'productId' => $productId
        ]);
    }

    public function contact() {
        return view('/contact-us' );
    }

    public function send(Request $request)
    {
         $request->validate([
            'firstname' => ['required', 'max:20'],
            'lastname' => ['required', 'max:20'],
            'email' => ['required', 'email'],
            'message' => ['required', 'min:10'],
        ]);

        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'message' => $request->message,
            'pid' => $request->pid
        ];

        Mail::to($request->email)->send(new SendMail($data));
        Mail::to('puppetsprite@gmail.com')->send(new SendAdminMail($data));

        dd(
            $data,              // sono i dati estrapolati
            $request->all(),    // ritorna tutti i dati del post
            $request,            // ritorna tutti i campi della Request
            'Emails inviate'
        );

    }
}
