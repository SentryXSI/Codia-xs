# TODO    
  
Update Codiad editor for PHP 7.3+  

Fork :  
https://github.com/SentryXSI/Codiad  

1 : Implement a secure document root ( move /index.php to /public/index.php )   
   
2 : Move application files to /app/  

2 : Move web assets to /public/assets/    
  
3 : Localise web assets ( jquery )    

4: Ideas 

    code snippets manager  
    code generators  
    - vhost generator  
    - static website / cms generator      

5 : Fix errors / issues  
 
  - add missing html start tag ( index.php )       
  - add \Lib namespace to fix namespace collisions with mb_ord() / mb_chr() ( /lib/diff_match_patch.php )   

Update class.filemanager.php ( public function modify )  

```php
$dmp = new Lib\diff_match_patch();
```

  - ( replace class file include / require with autoloader )    
  - ( replace 'global' usage with dependency injection )          

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
























