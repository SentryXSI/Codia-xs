# TODO    
  
Update Codiad editor for PHP 7.2+    

Fork :  
https://github.com/SentryXSI/Codiad  

### Ideas

    code snippets manager  
    code generators  
    - vhost generator  
    - static website / cms generator      


### Updates

1 : Implement a secure document root ( move /index.php to /public/index.php )   
   
2 : Move application files to /app/  

2 : Move web assets to /public/assets/    
  
3 : Localise web assets ( jquery ) 

4 : Refactored :  

    - No remote scripts    
    - Move inline css styles to css file  
    - Replace class file include / require with autoloader      
    - Replace 'global' usage with dependency injection   
    - Replace scandir/readdir with DirectoryIterator    
    - Replace array() with short array syntax   
    - Use PSR-2 : http://www.php-fig.org/psr/psr-2/    

5 : Fix errors / outstanding issues  
   
Diff Match Patch  
add \Lib namespace to fix namespace collisions with mb_ord() / mb_chr() ( /lib/diff_match_patch.php )    

```php
PHP Fatal error:  Cannot redeclare mb_ord() in /var/www/html/Codiad/lib/diff_match_patch.php on line 2079
```

Updated class.filemanager.php ( public function modify )  

```php
$dmp = new Lib\diff_match_patch();
```
  
File Manager  
/Codiad/components/filemanager/class.filemanager.php  
Line 180/181  
property not found - f_options  

```php
if ($this->foptions && $this->foptions['strategy']) {
    switch ($this->f_options['strategy']) {
```
  
Codiad/components/filemanager/class.filemanager.php  
Line 282  
undefined variable $content    


```php
$output = mb_convert_encoding($content, 'UTF-8');
```

Codiad/components/filemanager/class.filemanager.php  
Line 90  

Remove checks for magic quotes :  
  
```php
if (get_magic_quotes_gpc()) {
```

class.filemanager.php  
property not found  

```php
$this->mtime
```

common.php  
remove safe mode checks 

```php
if (ini_get('safe_mode')) return false;
```

index.php
add missing html start tag in head 

```html
<html lang="en">
```

index.php  
fix input tag  

```html
 <input type="text" id="finder"></input>
```

index.php  
change $theme  

```php
// Theme
$theme = THEME;
if(isset($_SESSION['theme'])) {
  $theme = $_SESSION['theme'] ?? THEME;
}
```

```php
// Theme
$theme = $_SESSION['theme'] ?? THEME;
```

Composer Updates  

```php
ext-json is missing in composer.json    
ext-mbstring is missing in composer.json  
ext-zip is missing in composer.json  
```
require php 7.2+  

```php
  "require":
  {
    "php": "^7.2",
    "ext-json": "*",
    "ext-mbstring": "*",
    "ext-zip": "*"
  },
```

# TODO  
  
Remove all checks for magic quotes / register globals :  
https://www.php.net/manual/en/security.magicquotes.php  

and then..  

