<?php
require('./common.php');

$page = new Crud('Activity');
$page->setListingQuery("SELECT * FROM Activity WHERE city_id=$default_city_id");
render();
