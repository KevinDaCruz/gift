<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GiftCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected string $giftName;

    protected string $giftPrice;

    /**
     * Create a new message instance.
     */
    public function __construct(string $giftName, string $giftPrice)
    {
        $this->giftName = $giftName;
        $this->giftPrice = $giftPrice;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Cadeau ajoute',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.gifts.created',
            with: [
                'giftName' => $this->giftName,
                'giftPrice' => $this->giftPrice,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('bellahu123-gift-4663231.jpg'))
                ->as('bellahu123-gift-4663231.jpg')
                ->withMime('image/jpeg'),
        ];
    }
}
