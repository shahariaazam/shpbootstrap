<?php
require_once(dirname(dirname(__FILE__))."/config.php");
require_once(dirname(dirname(__FILE__))."/classes/Bootstrap.php");
$Bootstrap= new Bootstrap();
?>
<?php
/**
 * Heading Tag use
 */
echo $Bootstrap->headTag('h1',array('text'=>'Thanks','class'=>false));?>