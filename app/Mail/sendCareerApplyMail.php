<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Support\Facades\File;

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
        if (File::exists($this->resumePath)) {
            // Get the original file extension
            $extension = File::extension($this->resumePath);

            // Determine the MIME type based on the file extension
            $mimeType = match ($extension) {
                'pdf' => 'application/pdf',
                'doc', 'docx' => 'application/msword',
                'jpg', 'jpeg' => 'image/jpeg',
                'png' => 'image/png',
                'txt' => 'text/plain',
                default => 'application/octet-stream',
            };

            return [
                Attachment::fromPath($this->resumePath)
                    ->as('Resume.' . $extension)
                    ->withMime($mimeType),
            ];
        }

        // Return an empty array if no file exists
        return [];
    }
}
