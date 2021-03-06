<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Index;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;


    public function showLinkRequestForm()
    {
        $brands = Index::where('section', 'brand')->get();
        foreach ($brands as $rq)
            $brand[$rq->name] = $rq;
        return view('auth.passwords.email', compact('brand'));
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset Password from Ytrade')
            ->from(env('MAIL_USERNAME'), env('MAIL_NAME'))
            ->line('We have received a request to reset your password. If you did, pllease use the link below to proceed.')
            ->action('Reset Password', url(config('app.url').route('password.reset', $this->token, false)))
            ->line("If you didn't request to reset your password, you should ignore this message.")
            ->line('If you do have any concerns about your account or login troubles, please contact our support team at support@ytrade.co.')
            ->line('See you soon at ytrade.co');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
