<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|min:10',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        
        Mail::send('emails.funfact', ['request' => $request], function($m) use ($request) {
            $m->from('website@ufka.be', 'UFKA.be Wist-je-dat');                    
            $m->to('scriptor@ufka.be', 'Scriptor')->subject('Er is een nieuw Wist-je-datje ingediend op ufka.be');
        });
        
        return redirect('home')->with([
            'flash_message' => 'Uw wist-je-datje is verzonden!',
            'flash_class' => 'alert-success'
        ]);
    }
}
