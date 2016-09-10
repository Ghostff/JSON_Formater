# JSON_Formatter
Allows you to pretty-print JSON data in a human-readable format
```php
<?php


$source = array (
  array ( 'points' => 1, 'name' => 'Peter'),
  array ( 'points' => 5, 'name' => 'Mike'),
  array ( 'points' => 2, 'name' => 'John Zoo'),
  array ( 'points' => 2, 'name' => 'John Ab')
);

echo Json::encode($source);

```
Outputs:

![alt tag](https://github.com/Ghostff/JSON_Formater.php/blob/master/SS.png)