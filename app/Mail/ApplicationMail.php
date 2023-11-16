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
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {//dd($this->details);
        return $this->from($this->details['email'])
                    ->to($this->details['to_email'])
                    // ->replyTo($this->details['email'])
                    ->subject('New contact message')
                    ->with([
                        // 'department' => $this->details['department'],
                        // 'department2' => $this->details['department2'],
                        'name' => $this->details['name'],
                        // 'username' => $this->details['username'],
                        'email' => $this->details['email'],
                        'phone' => $this->details['phone'],
                        // 'subject' => $this->details['subject'],
                        'message' => $this->details['message'],
                    ])
                    ->markdown('emails.application');
    }
}
