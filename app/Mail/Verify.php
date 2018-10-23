<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        $this->verify_token = $data['verify_token'];
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('devilking195@gmail.com', 'Testing')
                    ->view('verify')
                    ->with([
                        'verify_token'=> $this->verify_token,
                        'name' => $this->name,
                        'email' => $this->email,
                    ]);
    }
}
