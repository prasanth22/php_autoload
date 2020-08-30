"# php_autoload" 

steps to create auto load file:

- create some php files in src folder with classes and namespace
- create composer.json files with following lines 
 <pre>
 {
    "autoload": {
        "psr-4": {
            "MyApp\\": "src/"
        }
    }
}
</pre>
- run the following command
<pre>
composer dump-autoload -o
</pre>
this will create autoload.php file in vendor foder
- import this autoload.php in your index.php file and call the classes
