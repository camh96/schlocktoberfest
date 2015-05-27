<?php

if (!isset($_GET['page']) || $_GET['page'] == "") {
	include "templates/index.inc.php";
} else if ($_GET['page'] === "about") {
	include "templates/about.inc.php";
}

