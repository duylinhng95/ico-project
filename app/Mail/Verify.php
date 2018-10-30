<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Index;

class Verify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $brands = Index::where('section', 'brand')->get();
        foreach ($brands as $rq)
        {
            $brand[$rq->name] = $rq;
        }
        $this->verify_token = $data['verify_token'];
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->brand = $brand;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'), env('MAIL_NAME'))
                    ->subject('Verify your email')
                    ->view('verify')
                    ->with([
                        'verify_token'=> $this->verify_token,
                        'name' => $this->name,
                        'email' => $this->email,
                        'brand' => $this->brand,
                    ]);
    }
}
