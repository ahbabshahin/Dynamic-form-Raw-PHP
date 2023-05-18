<?php

$handle = fopen("newInfo.csv", "r");

$data = fgetcsv($handle);

foreach ($data as $a) {
   echo fgetcsv($handle,$a).'<br>';
}

?>