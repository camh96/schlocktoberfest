<?php

    require_once "classes/EmailView.php";


class AdminEmailView extends EmailView 
{

    public function render() 
    {
        $this->sendEmail("templates/adminemail.inc.php");
    }

}