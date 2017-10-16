<?php
set_time_limit(0);
$t1 = microtime();
define("PE_VERSION",'1.0');
require "lib/init.cls.php";

$ginkgo = new ginkgo;
$ginkgo->run();
//echo $t2[0]- $t1[0];
?>