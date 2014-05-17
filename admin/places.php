<?php
require('./common.php');

$page = new Crud('Place');
$page->setListingQuery("SELECT * FROM Place WHERE city_id=$default_city_id");
render();
