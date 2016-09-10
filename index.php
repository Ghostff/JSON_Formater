<?php
require 'src/Json.php';

$source = array (
  array ( 'points' => 1, 'name' => 'Peter'),
  array ( 'points' => 5, 'name' => 'Mike'),
  array ( 'points' => 2, 'name' => 'John Zoo'),
  array ( 'points' => 2, 'name' => 'John Ab')
);

echo Json::encode($source);

?>
