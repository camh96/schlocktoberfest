<?php

    require_once "classes/EmailView.php";


class SuggesterEmailView extends EmailView 
{

    public function render() 
    {
        $this->sendEmail("templates/suggesteremail.inc.php");
    }

}