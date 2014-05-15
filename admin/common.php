<?php
require('../common.php');
$config['site_folder'] = dirname(__FILE__);
$template->page = str_replace("admin/", "", $template->page);
$template->css_folder = 'admin/css';
$template->js_folder = 'admin/js';
$template->template = 'None';

if(empty($_SESSION['admin_id'])) {
	if($template->page != 'login.php') {
		showMessage("Please login to continue...", "admin/login.php", "error");
	}
}
