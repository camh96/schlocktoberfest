<?php

use Mailgun\Mailgun;

class AdminEmailView
{

	private $data;

	public function __construct($data) 
	{

		$this->data = $data;

	}

	public function render() 
	{
		extract($this->data);
		
		ob_start();
		
		include "templates/adminemail.inc.php";
		
		$emailBody = ob_get_clean();

		echo "<br />";
		var_dump($emailBody);

		  // # Instantiate the client.
		$mgClient = new Mailgun('key-67143118b148b5e88fa6fea571b390b4');
		$domain = "sandbox1fe06f5955724020bddd7c7be8ca645c.mailgun.org";

       # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => 'Schlocktoberfest <mailgun@' . $domain . '>',
            'to'      => '<camhovell@gmail.com>',
            'subject' => 'Thanks for suggesting ' . $title,
            'text'       => $emailBody
        ));

	}

}