
<?php 
    function classUploader($className) {
        include("classes/$className.php");
    }

    spl_autoload_register('classUploader');

    session_start();

    print_r(new ClasseA());
    echo "<br><br>";
    var_dump(new ClasseB());
?>