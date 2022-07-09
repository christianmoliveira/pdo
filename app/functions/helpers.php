<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function dd($dump)
{
  echo '<pre>';
  var_dump($dump);
  echo '</pre>';
  die();
}