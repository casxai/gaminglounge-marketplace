<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use App\Models\Listings;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccountDetailsEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $listing;

    /**
     * Create a new message instance.
     * @param  Listings  $listing
     * @return void
     */
    public function __construct(Listings  $listing)
    {
        $this->listing = $listing;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Game Account Details', // We can change the subject to something
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'mail.order.account',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
