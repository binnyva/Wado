<?php
require("./common.php");

$places = $sql->getById("SELECT id,name,locality FROM Place WHERE city_id=$default_city_id AND place_type_id=$QUERY[place_type_id]");

render();