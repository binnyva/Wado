<?php
require("./common.php");

$sections = array(
	'activities'	=> "Activities",
	'places'		=> "Places",
	'challenges'	=> "Challenges",
	'history'		=> "History"
	);

if(empty($_SESSION['person_id']) and empty($QUERY['for'])) {
	render('no_one.php');
	exit;
}
if(!empty($QUERY['for'])) {
	$person_id = $sql->getOne("SELECT id FROM Person WHERE slug='$QUERY[for]'");
	dump($person_id);
	dump($QUERY['for']);

	exit;
}


render();