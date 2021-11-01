<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Activity 2: Contacts Schedule</title>
</head>

<body>
    <?php
    //! Alert messages
    $error_new_name_field = false;

    if (isset($_GET['schedule'])) {
        // Con isset() comprobamos que la variable no sea null y contenga algún valor
        $schedule = $_GET['schedule'];
    } else {
        $schedule = array();
        // En el caso de ser null, creamos un array vacia y se la asignamos a agenda
    }

    // onSubmit
    if (isset($_GET['submit'])) {
        $new_name = filter_input(INPUT_GET, 'name');
        $new_telephone = filter_input(INPUT_GET, 'telephone');

        if (empty($new_name)) {
            $error_new_name_field = true;
        } elseif (empty($new_telephone)) {
            unset($agenda[$nuevo_nombre]);
        } else {
            $schedule[$new_name] = $new_telephone;
        }
    }
    ?>
    <div style="display: table-caption; margin-left: 15px">
        <h3>New Schedule Contact</h3>
        <form>
            <?php
            foreach ($schedule as $name => $telephone) {
                echo '<input type="hidden" name="schedule[' . $name . ']"';
                echo 'value="' . $telephone . '"/>';
            }
            ?>
            <label>Name: <input type="text" name="name" style="margin-bottom: 10px" /></label>
            <?php
            echo $error_new_name_field ? "<p style='color:red; margin: 0px 0px 10px 0px; font-size: 14px '>Yous must fill the name field !</p>" : null;
            ?>
            <label>Telephone: <input type="number" name="telephone" /></label>
            <input style="margin-top: 20px" type="submit" name="submit" value="execute" />
        </form>
    </div>

    <div style="margin-left: 15px">
        <h3>Schedule</h3>
        <?php
        if (empty($schedule)) {
            echo "<p>The schedule has got no contacts :(</p>";
        } else {
            echo "<ul>";
            foreach ($schedule as $name => $tel) {
                echo "<li>" . $name . " : " . $tel . "</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>

</body>

</html>