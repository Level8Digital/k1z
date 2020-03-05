<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendFinancing extends Mailable
{
    use Queueable, SerializesModels;

    public $messageDetails;
    /**
     * Create a new message instance.
     *
     */
     public function __construct(Array $messageDetails)
     {
         $this->messageDetails = $messageDetails;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
     {
        $this->from($this->messageDetails['email'])
          ->subject('k1zautosales.ca | Financing Application')
          ->replyTo($this->messageDetails['email'])
          ->view('financingEmail');

         return $this;
     }
}
