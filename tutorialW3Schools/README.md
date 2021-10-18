# Teoría W3Schools php

### What is PHP ?

- PHP is an acronym for "PHP: Hypertext Preprocessor"
- PHP is a widely-used, open source scripting language
- PHP scripts are executed on the server
- PHP is free to download an use

### What is a PHP File ? 

- PHP files can contain text, HTML, CSS, JavaScript and PHP code
- PHP code is executed on the server, and the result is returned to the browser as plain HTML
- PHP files have extension ".php"

With PHP your are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.

### What you should know ?

- a PHP script can be placed anywhere in the document. A PHP script starts with 
```
    <?php 
    // PHP code goes here
    ?>
 ``` 

 ###### Important
 - In PHP, keywords (e.g. if, else, while, echo, etc), classes, functions, and user-defined functions are not case-sensitive. **In the next example the three echo statements are eequa and legal**
```
    <!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html>
 ``` 

- **However, all variable names are case-sensitive !.** In the example below ($color, $COLOR and $coLOR) are treated as three different variables. 


