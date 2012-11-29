<?php
use \Model_Message;

class Controller_Message extends \Fuel\Core\Controller
{
    public function create (){
        if ($_POST)
        {
            // check for a valid CSRF token
            if ( ! \Security::check_token())
            {
                // CSRF attack or expired CSRF token
            }
            else
            {
                // token is valid, you can process the form input
                echo "FUCK";
                /*
                \Package::load('email');
                //

                $email = Email::forge();
                $email_data = "teste";

                // Set the from address
                $email->from('anonymous@email.me', 'My Name');

                // Set the to address
                $email->to('receiver@elsewhere.co.uk', 'Johny Squid');

                // Set a subject
                $email->subject('This is the subject');

                // Set multiple to addresses
                $email->to(array(
                    'caioaugusto@mail.com' => 'With a Name',
                ));


                // Set a html body message
                $email->html_body(\View::forge('email/template', $email_data));

                // Set an alt body, this is optional.
                $email->alt_body('This is my alt body, for non-html viewers.');*/
            }
        }
    }
}