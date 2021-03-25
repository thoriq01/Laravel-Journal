<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama,$isi,$penerima,$dari)
    {
        $this->nama = $nama;
        $this->isi  = $isi;
        $this->penerima = $penerima;
        $this->dari = $dari;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->dari)
        ->markdown('email',[
            'url'=>$this->nama
        ])
        ->with(
            [
                'nama'=>$this->nama,
                'isi' =>$this->isi,
                'penerima'=>$this->penerima
            ]
        );
    }
}
