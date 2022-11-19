<?php
require "config.php";
require "translate.php";
require "vendor/autoload.php";

$T = new \Erykai\Template\Template(TEMPLATE_URL_DASHBOARD);

$T->nav("index","pages/home");
echo $T->getIndex();
