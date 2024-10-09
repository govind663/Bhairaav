<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendChannelPartnerEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $companyNameOrIndividualName;
    public $nameOfTheOwner;
    public $entity;
    public $officeAddress;
    public $telephoneNumber;
    public $mobileNumber;
    public $website;
    public $emailId;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->companyNameOrIndividualName = $data['companyNameOrIndividualName'];
        $this->nameOfTheOwner = $data['nameOfTheOwner'];
        $this->entity = $data['entity'];
        $this->officeAddress = $data['officeAddress'];
        $this->telephoneNumber = $data['telephoneNumber'];
        $this->mobileNumber = $data['mobileNumber'];
        $this->website = $data['website'];
        $this->emailId = $data['emailId'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Channel Partner Registration',
            from: env('MAIL_FROM_ADDRESS')
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'frontend.emails.channel_partner_email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
