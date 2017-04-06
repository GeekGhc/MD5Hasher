## Md5 support for laravel
## 安装   
```php
composer require geekghc/hasher
```
或者在`composer.json`中的`require`中添加:
```php
"geekghc/hasher":"~1.0"
```
下载完毕之后 添加服务(config/app.php)
```php
 Geekghc\Hasher\MD5HasherProvider::class,
```