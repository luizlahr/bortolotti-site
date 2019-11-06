<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Response;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        try {
            Mail::to("atendimento@bortolottiaudio.com.br")
                ->subject($data["subject"])
                ->send(new ContactMail($data));
        } catch (Exception $e) {
            \Log::debug($e);
            return response()
                ->json(["error" => "Erro ao enviar e-mail!"]);
        }

        return response()->json(["message" => "E-mail enviado com sucesso!"]);
    }
}
