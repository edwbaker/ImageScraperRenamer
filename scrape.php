#!/usr/bin/php
<?php

$in_file = fopen("input.csv", "r");

while (! feof($in_file)) {
  $row = fgetcsv($in_file);
  file_put_contents("imgs/".$row[1].".jpg", file_get_contents($row[0]));
  sleep(5);
}

fclose($in_file);
