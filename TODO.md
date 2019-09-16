# TODO    
  
Update Codiad editor for PHP 7.2+  

Fork :  
https://github.com/SentryXSI/Codiad  

1 : Implement a secure document root ( move /index.php to /public/index.php )   
   
2 : Move application files to /app/  

2 : Move web assets to /public/assets/    
  
3 : Localise web assets ( jquery ) 


4: Ideas 

    - No remote scripts    
    - Move inline css styles to css file  
    - Replace class file include / require with autoloader      
    - Replace 'global' usage with dependency injection   
    - Use short array syntax   
    - replace scandir/readdir with DirectoryIterator        

    code snippets manager  
    code generators  
    - vhost generator  
    - static website / cms generator      

5 : Fix errors / issues  
 
  - add missing html start tag in head ( index.php )    

```html

<html lang="en">
```
   
  - add \Lib namespace to fix namespace collisions with mb_ord() / mb_chr() ( /lib/diff_match_patch.php )   

```php

PHP Fatal error:  Cannot redeclare mb_ord() in /var/www/html/Codiad/lib/diff_match_patch.php on line 2079

```

Update class.filemanager.php ( public function modify )  

```php

$dmp = new Lib\diff_match_patch();

```
  
Composer  
ext-json is missing in composer.json    
ext-mbstring is missing in composer.json  
ext-zip is missing in composer.json  
  
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
class.filemanager.php
Line 90

Remove checks for magic quotes :

```php

    if (get_magic_quotes_gpc()) {

```

class.filemanager.php  
Property not found  

```php

$this->mtime

```






index.php  
fix input tag  

```html

 <input type="text" id="finder"></input>

```

common.php  
Remove safe mode check  

```php

if (ini_get('safe_mode')) return false;

```




