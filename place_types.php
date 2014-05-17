<?php
require("./common.php");

$place_type = $sql->getById("SELECT id,name FROM Place_type");

render();