# pretty_folder_structure
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

echo Json::print($source);

```
Outputs:
```HTML
<div style="font-size:13px;font-family:Courier New, Courier, monospace !important;">{<br><div style='margin-left:20px;'>"0": {<br><div style='margin-left:20px;'>"points": 1,<br>"name": "Peter"</div>},<br>"1": {<br><div style='margin-left:20px;'>"points": 5,<br>"name": "Mike"</div>},<br>"2": {<br><div style='margin-left:20px;'>"points": 2,<br>"name": "John Zoo"</div>},<br>"3": {<br><div style='margin-left:20px;'>"points": 2,<br>"name": "John Ab"</div>}</div>}<br></div>
```