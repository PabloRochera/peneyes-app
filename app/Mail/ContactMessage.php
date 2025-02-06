<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Aquí se almacenarán los datos del formulario

    /**
     * Create a new message instance.
     *
     * @param array $data Datos del formulario
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Nou missatge de contacte')
                    ->view('emails.contact');
    }
}
