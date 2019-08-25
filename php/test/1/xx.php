<?php
$date = date("Y/m/d")." ".date("h:i:sa");

preg_match_all("/[0-9]{2}/",$date,$a);

echo strlen($_GET["a"]);


?>
