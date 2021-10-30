<!-- HTML -->
<html>

<body>
    <form action="sort_algorithm.php" method="get">
        Numbers to Order: <input type="text" name="numbers"><br>
        <p>¡ Please remember split the numbers with a "," !</p><br>
        <input type="submit">
    </form>
</body>

</html>

<!-- PHP -->
<?php

$control_while = false;
$control_change = 0;
$numbers_string = $_GET['numbers'];
$numbers_array = array_map('intval', explode(',', $numbers_string));

while (!$control_while) {
    for ($i = 0; $i < (count($numbers_array)-1); $i++) {
        if ($numbers_array[$i] > $numbers_array[$i + 1]) {
            $big_num = $numbers_array[$i];
            $small_num = $numbers_array[$i + 1];
            $numbers_array[$i + 1] = $big_num;
            $numbers_array[$i] = $small_num;
            $control_change = 1;
        }
    }
    if ($control_change == 1) {
        $control_change = 0;
    } else {
        $control_while = true;
    }
}

$sorted_numbers = implode(",", $numbers_array);
print_r($numbers_array);
echo nl2br("\nOriginal sequence of numbers: " . $_GET['numbers'] . "\n");
echo "Organized sequence of numbers: " . $sorted_numbers;

?>