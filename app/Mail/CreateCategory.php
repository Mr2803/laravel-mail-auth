<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateCategory extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $type;
    private $name;
    private $author;
    public function __construct($type,$name,$author)
    {
        $this -> type = $type;
        $this -> name = $name;
        $this -> author = $author;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $type = $this -> type;
        $name = $this -> name;
        $author = $this -> author;
        
        return $this->view('mails.createCategory' , 
                            compact("type","name","author"));
    }
}
