<?php
$i = 0;

$arrayOfValues = array(
    '""' => '',
    'null' => null,
    'var' => null, 
    'is undefined' => null,
    "array();" => array(),
    "array('a', 'b');" => array('a', 'b'),
    'false' => false,
    'true' => true,
    1 => 1,
    42 => 42,
    0 => 0,
    -1 => -1,
    '1s' => "1",
    "0s"=> "0",
    "-1s" => "-1",
    "php" => "php",
    "True" => "true",
    "False" => "false"
);

$arrayOfExpressions = ['Expression', 'gettype()', 'empty()', 'is_null()', 'isset()', 'bool: if($x']
?>

<html>

<head>
    <title>Tabla de valores de PHP</title>

    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        table,
        td,
        th {
            border: 1px solid black;
        }
        th {
            background-color: #91ccbe;
        }
    </style>

</head>

<body>
    <table>
        <tr>
            <?php foreach ($arrayOfExpressions as $expression) : ?>
                <th id="header"><?php echo $expression; ?></th>
            <?php endforeach; ?>
        </tr>

        <?php foreach ($arrayOfValues as $key => $value) : ?>
            <?php 
                echo $i % 2 == 0
                ? '<tr style="background-color: #e8ebe9">'
                : '<tr style="background-color: #c7c0cc">' 
            ?>
                <?php echo '<td>$x = ', $key, '</td>'?>
                <td><?php echo gettype($value) ?></td>
                <td><?php echo empty($value) ? 'true' : 'false' ?></td>
                <td><?php echo is_null($value) ? 'true' : 'false' ?></td>
                <td><?php echo isset($value) ? 'true' : 'false' ?></td>
                <td><?php echo ($value) ? 'true' : 'false' ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>

<!-- Se puede poner un id incremental de la siguiente forma en el elemento <th>? -->