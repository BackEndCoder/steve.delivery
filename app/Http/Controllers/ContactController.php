<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

	public function store(Request $request)
	{

     	$this->validate(request(), [
            'name'    => 'required',
            'email'   => 'required|email',
            'msg'     => 'required'
        ]);

		$contact = [];

		$contact['name'] = $request->get('name');
		$contact['email'] = $request->get('email');
		$contact['msg'] = $request->get('msg');

		Mail::to(config('mail.from.address'))->send(new ContactEmail($contact));

		flash('Your message has been sent!')->success();

		return redirect()->route('welcome');

	}

}
