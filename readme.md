# Simpe Session Class
This class does simple session operations.

```php
set('username', 'Ümit Yatarkalkmaz');
```
`set($key, $value)` Sets session.
```php
Session::get('username'); 
```
`get($key)` Gets session.
```php
Session::remove('username'); 
```
`remove($key)` Remove session.
```php
Session::start('MySession');
```
`start($sessionName)` Names and starts the session.
```php
Session::setTimeout(60);
```
`setTimeout($minutes)` Adds a timeout to the session.
```php
Session::regenerate();
```
`regenerate()`  Regenerate the session.
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