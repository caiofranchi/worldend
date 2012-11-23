<?php
use \Model_Message;

class Controller_Message extends \Fuel\Core\Controller
{
    public function action_post (){
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

        /** By default this will also generate an alt body from the html,
        and attach any inline files (not paths like http://...)       **/

        // Set an alt body, this is optional.
        $email->alt_body('This is my alt body, for non-html viewers.');
    }
}