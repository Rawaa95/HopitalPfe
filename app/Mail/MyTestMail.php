<?php

namespace App\Mail;
   
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
 
class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
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
        return $this->from("hopitalll2024@gmail.com") // L'expéditeur
                    ->subject("Mail ") // Le sujet
                    ->view('myTestMail'); // La vue
    }
}