<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use anhskohbo\NoCaptcha\Facades\NoCaptcha;
use Mail;

class ContactController extends Controller
{

    public function getContactForm(Request $request)

    {
        $name = $request->input('name');
        $email_client = $request->input('email');
        $subject = $request->input('subject');
        $msg_client = $request->input('message');

        $captcha = new \Anhskohbo\NoCaptcha\NoCaptcha(env('NOCAPTCHA_SECRET'), env('NOCAPTCHA_SITEKEY'));

        // if form is full
        if (! empty($_POST))
        {
            $captcha_resp = $captcha->verifyResponse($_POST['g-recaptcha-response']);

            if($captcha_resp == true)
            {
            Mail::send('emails.contact', array('name' => $name, 'email_client' => $email_client, 'subject' => $subject, 'msg_client' => $msg_client), function($message) use ($email_client, $name)
            {
                $message->from($email_client, $name);
          
                $message->to('info@qqp-lb.com')->subject('Message from Website');
            });
            \Session::flash('msg', 'Successfully sent!' );
            return redirect()->back();
        }
    }
    }
}
