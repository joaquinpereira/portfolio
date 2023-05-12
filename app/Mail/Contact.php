<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {
        return $this->from('no-reply@diarioprogramador.com', 'Automated System for Sending Notifications')->subject('A user send you a new message')->view('layouts.contact-email', ['data' => $this->data]);
    }
}
