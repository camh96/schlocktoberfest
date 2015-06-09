<?php

use Mailgun\Mailgun;

class SuggesterEmailView
{

	private $data;

	public function __construct($data) 
	{

		$this->data = $data;

	}

   public function render()
    {
        $this->sendEmail("templates/suggesteremail.inc.php");
    }

    public function sendEmail($templateFile)
    {

		extract($this->data);
		$mgClient = new Mailgun('key-67143118b148b5e88fa6fea571b390b4');
		$domain = "sandbox1fe06f5955724020bddd7c7be8ca645c.mailgun.org";

		ob_start();
		
		include $templateFile;
		
		$emailBody = ob_get_clean();

		var_dump($emailBody);

		  // # Instantiate the client.
	

       # Make the call to the client.
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(        
            'from'    => $emailHeaders['from'],
            'to'      => $emailHeaders['to'],
            'subject' => $emailHeaders['subject'],
            'text'       => $emailBody
        ));

	}}

