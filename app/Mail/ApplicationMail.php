<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $details = [])
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->details['email'], $this->details['name'])
            ->to($this->details['to_email'])
            ->replyTo($this->details['email'])
            ->subject('RE: Application for job openings')
            ->attach($this->details['cv']->getRealPath(),
            [
                'as' => $this->details['cv']->getClientOriginalName(),
                'mime' => $this->details['cv']->getClientMimeType(),
            ])
            ->with([
                'name' => $this->details['name'],
                'cv' => $this->details['cv'],
                'email' => $this->details['email'],
                'phone' => $this->details['phone'],
                // 'subject' => $this->details['subject'],
                'message' => $this->details['message'],
            ])
            ->markdown('emails.application');
    }
}
