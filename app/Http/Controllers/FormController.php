<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;


class FormController extends Controller
{
	public function store()
	{
		$mailData = request()->validate([
			'name' => 'required',
			'email' => ['required', 'email'],
			'subject' => 'required',
			'content' => ['required', 'min:5']
		]);

		Mail::to('mariormt17@gmail.com')->queue(new MessageReceived($mailData));

		return back()->with('status', __('Mensaje enviado, gracias por comunicarte.'));
	}
}
