<?php
require 'vendor/autoload.php';

use \Comodojo\Zip\Zip;

$zip = Zip::create('wp-content.zip');

$zip->add('wp-content');