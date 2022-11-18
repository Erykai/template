<?php
require "config.php";
require "vendor/autoload.php";

$T = new \Erykai\Template\Template("admin");

$T->nav("index","pages/home");
echo $T->getIndex();
