<?php
require_once(dirname(dirname(__FILE__))."/config.php");
require_once(dirname(dirname(__FILE__))."/classes/Bootstrap.php");
$Bootstrap= new Bootstrap();
?>
<?php var_dump($Bootstrap->headTag('h3',array()))?>