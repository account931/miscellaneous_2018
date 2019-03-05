This is Composer autoloader working example.
How to:
1."CLI-> composer init". It creates composer.json in folder.
2. Add ""autoload":" section to composer.json.
3. For PSR-4 autoload(classes with namespaces) add section { "psr-4": { "Cubet\\": "vendor" }, } . 
It says that classes with namespace {Cubet} should be loaded from folder {vendor}

5. For classes that don't fit PSR-4 (classes without namespace) add section {"classmap": ["library/"]}.
It says that non PSR-4 classes must be found in folder {library}

6. CLI-> $ composer dump-autoload -o      -> This CLI must be run after each composer edits to update the autoload.
7. Add to index.php {require 'vendor/autoload.php'; //Composer autoload}


#Composer.json doesnot accept any comments, u can use "_comment": " comments goes here" in it.
#Any unnecessay comma causes crash


Reference
https://klisl.com/composer_autoload.html
https://victor.4devs.io/ru/php/autoload-composer.html

