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
        return $this->from('prashant.thapa1948@gmail.com', $this->inquiry['firstname'])
            ->view('frontend.mail.quick-inquiry')
            ->subject('Subscribe Newsletter')
            ->with([
//
                'inquiry_firstname' =>$this->inquiry['firstname'],
                'inquiry_secondname' =>$this->inquiry['secondname'],
                'inquiry_email' =>$this->inquiry['email'],
                'inquiry_communitycheck' =>$this->inquiry['communitycheck'],
                'inquiry_organisationcheck' =>$this->inquiry['organisationcheck'],
                'inquiry_volunteercheck' =>$this->inquiry['volunteercheck'],
                'inquiry_fundercheck' =>$this->inquiry['fundercheck']
                ]);
    }
}
