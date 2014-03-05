<?php

include "../framework/inspector.php";
include "../framework/core/exception.php";
include "../framework/arraymethods.php";
include "../framework/stringmethods.php";
include "../framework/base.php";
include "../framework/configuration/exception.php";
include "../framework/configuration/exception/syntax.php";
include "../framework/configuration/exception/Implementation.php";
include "../framework/configuration/driver.php";
include "../framework/configuration/driver/ini.php";
include "../framework/configuration.php";

$configuration = new Framework\Configuration(array(
		'type' => 'ini'
	));
$configuration = $configuration->initialize();
$parsed = $configuration->parse("configuration");

print_r($parsed);