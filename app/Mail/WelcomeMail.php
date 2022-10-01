<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailinfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailinfo)
    {
        $this->mailinfo = $mailinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.welcomeMail')
        ->with('mailinfo',$this->mailinfo);
    }
}
