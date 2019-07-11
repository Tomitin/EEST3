<?php

namespace eestn3\Http\Controllers;

use eestn3\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'required'
        ]);

        Mail::to('tomassaez1234@gmail.com')->send(new ContactFormMail($data));

        return redirect('contacto')->with('message','Gracias por su mensaje. Responderemos a la brevedad.');
    }
}
