<?php

namespace Bitfumes\contact\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $Message;
    public $Name;

    /**
     * Create a new Message instance.
     *
     * @return void
     */
    public function __construct($Message, $Name)
    {
        $this->Message = $Message;
        $this->Name = $Name;
    }

    /**
     * Build the Message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['Message' => $this->Message, 'Name' => $this->Name]);
    }
}
