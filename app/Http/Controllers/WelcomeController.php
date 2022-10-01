<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


class WelcomeController extends Controller
{
    public function mailSend() {
        $email = 'noreply@codingerscourse.com';

        $mailInfo = [
            'title' => 'Welcome New User',
            'url' => 'https://www.codingerscourse.com'
        ];

        Mail::to($email)->send(new WelcomeMail($mailInfo));

        return response()->json([
            'message' => 'Mail has sent.'
        ], Response::HTTP_OK);
    }
}
