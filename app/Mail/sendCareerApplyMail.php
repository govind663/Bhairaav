<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class sendCareerApplyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    public $resumePath;

    /**
     * Create a new message instance.
     */
    public function __construct($mailData, $resumePath)
    {
        $this->mailData = $mailData;
        $this->resumePath = $resumePath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Career Apply Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'frontend.emails.career_apply_mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        // Attach the candidate's resume document
        return [
            Attachment::fromPath($this->resumePath)
                ->as('Resume.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
