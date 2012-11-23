<?php

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{

	/**
	 * The basic welcome message
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('welcome/index'));
	}

    public function action_mail()
    {
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
            'example@mail.com' => 'With a Name',
        ));


        // Set a html body message
        $email->html_body(\View::forge('email/template', $email_data));

        /** By default this will also generate an alt body from the html,
        and attach any inline files (not paths like http://...)       **/

// Set an alt body, this is optional.
        $email->alt_body('This is my alt body, for non-html viewers.');
    }

	/**
	 * A typical "Hello, Bob!" type example.  This uses a ViewModel to
	 * show how to use them.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(ViewModel::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
