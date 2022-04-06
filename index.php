<?php
require 'classes/Bootstrap.php';
require 'classes/Controller.php';
require 'classes/Model.php';
require 'config.php';

require 'controllers/home.php';
require 'controllers/user.php';
require 'controllers/shares.php';
require 'controllers/admins.php';

require 'models/home.php';
require 'models/user.php';
require 'models/share.php';
require 'models/admin.php';

$bootstrap=new Bootstrap($_GET);
$controller=$bootstrap->createController();
if ($controller) {
	$controller->executeAction();
}