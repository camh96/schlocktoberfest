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
				'newsletter' => "",
				'errors' => [
					'title' => "",
					'email' => "",
					'newsletter' => ""
				]
			];
		}
		
		require "classes/HomeView.php";

		$view = new HomeView($moviesuggest);
		$view->render();
		
		break;

	case "about":

		require "classes/AboutView.php";
		
		$view = new AboutView();
		$view->render();

		break;

	case "moviesuggest":

		$_SESSION['moviesuggest'] = null;

		$moviesuggest = [
			'errors' => []
		];

		// capture suggestion data

		$expectedVariables = ['title', 'email', 'newsletter'];

		foreach ($expectedVariables as $variable) {
			
			// assume no errors
			$moviesuggest['errors'][$variable] = "";

			if (isset($_POST[$variable])) {
				$moviesuggest[$variable] = $_POST[$variable];
			} else {
				$moviesuggest[$variable] = "";
			}
		}

		// validate suggestion data

		$error = false;

		if (strlen($moviesuggest['title']) == 0) {
			$moviesuggest['errors']['title'] = "A movie title is required.";
			$error = true;
		}
		if (! filter_var($moviesuggest['email'], FILTER_VALIDATE_EMAIL)) {
			$moviesuggest['errors']['email'] = "A valid email address required.";
			$error = true;
		}

		if ($error === true) {
			$_SESSION['suggestmovieerror'] = true;
			$_SESSION['moviesuggest'] = $moviesuggest;
			header("Location: ./#moviesuggest");
			exit();	
		}

		echo "Success! Your suggestion is valid!";

		break;

	default: 
		echo "404";
}
