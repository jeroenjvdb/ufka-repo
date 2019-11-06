<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required|min:2',
            'recipient' => 'required',
            'subject' => 'required|min:5',
            'message' => 'required|min:30',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        
        Mail::send('emails.contactform', ['request' => $request], function($m) use ($request) {
            /*$m->from($request->email, $request->name);*/
            $m->from('website@ufka.be', 'ufka website no reply');
            $m->replyTo($request->email, $request->name);
            $m->to(($request->recipient).'@ufka.be')->subject($request->subject);
        });
        
        return redirect('contact')->with([
            'flash_message' => 'Uw bericht is verzonden!',
            'flash_class' => 'alert-success'
        ]);
    }
}
