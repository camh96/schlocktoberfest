<?php

abstract class View {

	protected $data;

	public function __construct($data) 
	{

		$this->data = $data;

	}

   abstract function render();
 } 
?>