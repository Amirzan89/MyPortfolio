<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function build(){
        return $this->view('email.Contact')
        ->with(['email'=>$this->data['email'],'name'=>$this->data['name'],'subject'=>$this->data['subject'],'messages'=>$this->data['message']])
        ->from($this->data['email'], $this->data['name']);
    }
}