# JSON_Formater
Now you dont need to send a Header to get a readable JSON data
```php
<?php
require 'Json.php';

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