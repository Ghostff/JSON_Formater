<?php
require 'src/Json.php';

Json::setBreak('<br>');
Json::setIndent('<span style=\'margin-left:20px;display:block\'>', '</span>');
Json::allowFont(true, 'Lucida Console, Monaco, monospace');

$source = array (
  array ( 'points' => 1, 'name' => 'Peter'),
  array ( 'points' => 5, 'name' => 'Mike'),
  array ( 'points' => 2, 'name' => 'John Zoo'),
  array ( 'points' => 2, 'name' => 'John Ab')
);

echo Json::encode($source);

?>