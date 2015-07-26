<?php

namespace App\Views;

use Mailgun\Mailgun;

abstract class EmailView extends View
{

    public function sendEmail($templateFile)
    {

        extract($this->data);
        $mgClient = new Mailgun('key-67143118b148b5e88fa6fea571b390b4');
        $domain = "sandbox1fe06f5955724020bddd7c7be8ca645c.mailgun.org";

        ob_start();
        
        include $templateFile;
        
        $emailBody = ob_get_clean();

        
        
          // # Instantiate the client.
    

       # Make the call to the client.
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => $emailHeaders['from'],
            'to'      => $emailHeaders['to'],
            'subject' => $emailHeaders['subject'],
            'text'       => $emailBody
        ));

    }
}
