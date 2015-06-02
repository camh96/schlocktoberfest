<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
	case "home":
		include "templates/index.inc.php";
		break;

	case "about":
		include 'templates/about.inc.php';
		break;

	case "moviesuggest":
		echo "Movie Suggest";
		echo "<pre>";
		var_dump($_POST);
		echo "</pre>";
		?>
			<h1><?php echo $_POST['title']; ?></h1>
		<?php

		break;

	default: 
		echo "404";
}
