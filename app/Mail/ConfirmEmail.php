<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;

    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'fouzanvictor@gmail.com';
        $subject = 'This is a demo!';
        $name = 'Fouzan Saleem';

        return $this->view('emails.confirmemail')
            ->from($address, $name)
            ->cc($this->user->email, $this->user->name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with([ 'message' => $this->user['message'] ]);
    }
    //    return $this->view('view.name');

}
