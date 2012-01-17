<?php
/*
 * Copyright (c) 2011, Johannes Becker
 * All rights reserved.
 *
 */
namespace fuelcell;
define('HYDROGEN_AUTOCONFIG_PATH',
	__DIR__ . '/../../config/hydrogen.autoconfig.php');
require_once(__DIR__ . '/../hydrogen/hydrogen.inc.php');

use hydrogen\autoloader\Autoloader;
Autoloader::registerNamespace('fuelcell', __DIR__);

?>
