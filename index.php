<?php



require 'vendor/autoload.php';

use CowSay\CrazyCow;

$marnie = new CrazyCow('Hello, Farm!');


$output = $marnie->say();
echo $output;