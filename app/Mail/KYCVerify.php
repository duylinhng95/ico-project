<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Index;

class KYCVerify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $brands = Index::where('section', 'brand')->get();
        foreach ($brands as $rq)
        {
            $brand[$rq->name] = $rq;
        }
        $this->brand = $brand;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('devilking195@gmail.com', 'Ytrade')
            ->subject('KYC Verification complete')
            ->view('kycverify')
            ->with([
                'name' => $this->name,
                'brand' => $this->brand,
            ]);
    }
}
