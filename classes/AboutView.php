<?php

class AboutView
{

	public function __construct() 
	{
	}

	public function render()
	{
		$page = "about";
		$page_title = "About The Festival";		
		include "templates/master.inc.php";
	}

	public function content() {
		include "templates/about.inc.php";
	}

}
