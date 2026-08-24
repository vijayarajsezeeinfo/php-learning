<?php

require "vendor/autoload.php";

use ComposerDemo3\Model\Manager;

$manager = new Manager("Vijay", 25, "IT");

echo $manager->intro();

?>