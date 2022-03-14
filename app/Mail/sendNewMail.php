<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;
    
    public function __construct($_lead)
    {
        $this->lead = $_lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new-contact');
    }
}
