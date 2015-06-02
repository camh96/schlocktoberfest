<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
	case "home":
		if (isset($_SESSION['moviesuggest'])) {
			$moviesuggest = $_SESSION['moviesuggest'];
		} else {
			$moviesuggest = [
				'title' => "",
				'email' => "",
				'newsletter' => ""
			];
		}

		include "templates/index.inc.php";
		break;

	case "about":
		include 'templates/about.inc.php';
		break;

	case "moviesuggest":

		$_SESSION['moviesuggest'] = null;

		$moviesuggest = [];

		// capture suggestion data

		$expectedVariables = ['title', 'email', 'newsletter'];

		foreach ($expectedVariables as $variable) {
			if (isset($_POST[$variable])) {
				$moviesuggest[$variable] = $_POST[$variable];
			} else {
				$moviesuggest[$variable] = "";
			}
		}

		// validate suggestion data

		$error = false;

		if (strlen($moviesuggest['title']) == 0) {
			$error = true;
		}
		if (! filter_var($moviesuggest['email'], FILTER_VALIDATE_EMAIL)) {
			$error = true;
		}

		if ($error === true) {
			$_SESSION['suggestmovieerror'] = true;
			$_SESSION['moviesuggest'] = $moviesuggest;
			header("Location: ./");
			exit();	
		}

		echo "Success! Your suggestion is valid!";

		break;

	default: 
		echo "404";
}
