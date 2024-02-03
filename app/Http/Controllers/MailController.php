<?php

namespace App\Http\Controllers;

use App\Mail\WebContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function sendMeMail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email",
            "address" => "required",
            "phone" => "required",
            "message" => "required"

        ], [
            "name.required" => "El nombre es requerido",
            "email.required" => "El email es requerido",
            "email.email" => "El email no es válido",
            "address.required" => "La dirección es requerida",
            "phone.required" => "El teléfono es requerido",
            "message.required" => "El mensaje es requerido"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()->first(),
                "errors" => implode(" - ", $validator->errors()->all()),
                "data" => null
            ]);
        }

        $request['message_text'] = $request['message'];
        $data = $request->all();
        $to_email = env('MAIL_FROM_ADDRESS');
        Mail::to($to_email)->send(new WebContactFormMail($data));
        return response()->json([
            "success" => true,
            "message" => "Correo enviado correctamente",
            "errors" => null,
            "data" => $data
        ]);
    }
}
