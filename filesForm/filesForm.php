<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Upload files with PHP form</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data" style="text-align:center;">
        <div style="margin-top: 30px;">
            <input type="file" name="fileToUpload1" id="fileToUpload1">
        </div>
        <div style="margin-top: 30px;">
            <input type="file" name="fileToUpload2" id="fileToUpload2">
        </div>

        <input type="submit" value="Upload Files" name="submit" style="margin-top: 30px;">
    </form>
</body>

<?php
$file1 = $_FILES["fileToUpload1"];
$file2 = $_FILES["fileToUpload2"];

/**
 * Show characteristics files saved in GLOBAL var $_FILES
 */
foreach ($_FILES as $key => $value) {
    print_r($key.": ".$value."\n");
    echo"<br>";
}

echo"<br>";
echo"¡ Characteristics file1 !";
echo"<br>";
print_r("Name: ".$file1['name']);
echo"<br>";
print_r("Type: ".$file1['type']);
echo"<br>";
print_r("Size: ".$file1['size']);
echo"<br>";
print_r("Tmp_name: ".$file1['tmp_name']);
echo"<br>";
print_r("Error: ".$file1['error']);
?>

</html>