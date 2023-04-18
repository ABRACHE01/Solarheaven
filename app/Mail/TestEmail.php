<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointementdata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointementdata)
    {
        $this->appointementdata = $appointementdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Appointement')->view('pages.mail');
    }
}