<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $inquiryData;

    public function __construct($inquiryData)
    {
        $this->inquiryData = $inquiryData;
    }

    public function build()
    {
        return $this->subject('New Site Visit or Inquiry')
            ->view('emails.inquiry');
    }
}
