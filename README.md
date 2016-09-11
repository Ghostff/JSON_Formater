# JSON_Formatter
Allows you to pretty-print JSON data in a human-readable format

[![Latest Stable Version](https://img.shields.io/badge/release-v1.0.0-brightgreen.svg)](https://github.com/Ghostff/JSON_Formatter/releases) ![License](https://img.shields.io/packagist/l/gomoob/php-pushwoosh.svg) [![Latest Stable Version](https://img.shields.io/badge/packagist-v5.5.4-blue.svg)](https://packagist.org/packages/ghostff/json-formatter) [![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg)](https://php.net/)
----------

#Installation   
You can download the  Latest [release version ](https://github.com/Ghostff/JSON_Formatter/releases/) as a standalone, alternatively you can use [Composer](https://getcomposer.org/) for optional dependencies such as PHPUnit.
```json
$ composer require ghostff/json-formatter
```    
Or add:
```json
{
    "require": {
        "ghostff/json-formatter": "^1.0"
    }
}

```
to your ``composer.json``

--------
**Usage**:  

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

![alt tag](https://github.com/Ghostff/JSON_Formatter.php/blob/master/SS.png)
