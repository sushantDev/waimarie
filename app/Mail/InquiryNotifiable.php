<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InquiryNotifiable extends Mailable
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
        return $this->from('query.mawacademy@mawnepal.com', $this->inquiry['name'])
            ->view('frontend.mail.quick-inquiry')
            ->subject('Inquiry Email')
            ->with(['inquiry_message' => $this->inquiry['message'],
                'inquiry_subject' =>$this->inquiry['subject'],
                'inquiry_name' =>$this->inquiry['name'],
                'inquiry_email' =>$this->inquiry['email'],
                'inquiry_phone' =>$this->inquiry['phone']
                ]);
    }
}
