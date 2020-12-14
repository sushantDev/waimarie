<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InquiryNotifiableDonation extends Mailable
{
    use Queueable, SerializesModels;

    protected $inquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('prashant.thapa1948@gmail.com', $this->inquiry['name'])
            ->view('frontend.mail.contact')
            ->subject('Contact Remarks')
            ->with([
                'inquiry_name' =>$this->inquiry['name'],
                'inquiry_email' =>$this->inquiry['email'],
                'inquiry_phone' =>$this->inquiry['phone'],
                'inquiry_message' =>$this->inquiry['message']
            ]);
    }
}
