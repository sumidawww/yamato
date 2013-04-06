<?php
$str=<<<EOD
工事中です

 



EOD;

echo str_replace(array("\r\n","\r","\n"), "<br>\n", $str);
?>
