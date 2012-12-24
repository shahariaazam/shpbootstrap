<?php
define('CLASS_DIR','classes');
define('CSS_DIR','assets/css');
define('JS_DIR','assets/js');
define('IMG_DIR','assets/img');
require_once(CLASS_DIR.'/Bootstrap.php');
require_once(CSS_DIR.'/bootstrap.css');

$Bootstrap=new Bootstrap();
echo $Bootstrap->name;