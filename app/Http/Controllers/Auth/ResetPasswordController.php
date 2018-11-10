<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Index;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function showResetForm(Request $request, $token = null)
    {
        $brands = Index::where('section', 'brand')->get();
        foreach ($brands as $rq)
            $brand[$rq->name] = $rq;
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email , 'brand' => $brand]
        );
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
