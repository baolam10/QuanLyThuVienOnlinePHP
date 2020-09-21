<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $ms;
    public $name;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($MSHS, $Ten, $message)
    {
        $this->ms = $MSHS;
        $this->name = $Ten;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_mssv = $this->ms;
        $e_ten = $this->name;
        $e_message = $this->message;

        return $this->view('Lien-he.sendmail', compact('e_mssv','e_ten','e_message'))->subject($e_mssv);
    }
}
