<?php
$str = "'ahb acb aeb aeeb adcb axeb";
$regexp = "/a..b/";
$m = array();
preg_match_all($regexp, $str, $m);
foreach($m[0] as $x)
{
    echo $x, " ";
}
?>