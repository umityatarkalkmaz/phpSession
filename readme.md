# Simpe Session Class
This class does simple session operations.

`set($key, $value)` Sets session.
```php
set('username', 'Ümit Yatarkalkmaz');
```
`get($key)` Gets session.
```php
Session::get('username'); 
```
`remove($key)` Remove session.
```php
Session::remove('username'); 
```
`start($sessionName)` Names and starts the session.
```php
Session::start('MySession');
```
`setTimeout($minutes)` Adds a timeout to the session.
```php
Session::setTimeout(60);
```
`regenerate()` Regenerate the session.
```php
Session::regenerate();
```
`destroy();` Destroy the session.
```php
Session::destroy(); Destroy the session.
```

Useing Example
```php
require 'path/to/session.php';
use UmitYatarkalkmaz\Session;
Session::start('MySession');
Session::setTimeout(60);
Session::regenerate();

Session::set('username', 'Ümit Yatarkalkmaz');

$username = Session::get('username');
Session::remove('username');

Session::destroy();
```
