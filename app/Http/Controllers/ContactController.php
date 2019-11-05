<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            Mail::to("boivl@hotmail.com")->send(new ContactMail($data));
        } catch (Exception $e) {
            \Log::debug($e);
        }

        return redirect()->back();
    }
}
