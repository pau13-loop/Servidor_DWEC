<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Activity 2: Contacts Schedule</title>
</head>

<body>
    <?php
    if (isset($_POST['schedule'])) {
        $schedule = $_POST['schedule'];
    } else {
        $schedule = array();
    }

    if (isset($_POST['button'])) {
        if (isset($_POST["name"]) && isset($_POST["phone"]) && $_POST["name"] != '' && $_POST["phone"] != '') {
            $schedule[$_POST["name"]] = $_POST["phone"];
        } else {
            echo '<script language="javascript">';
            echo 'alert("Fill all the form fields please")';
            echo '</script>';
        }
    }
    ?>

    <div style="text-align:center;">
        <div>
            <h2>
                Form Schedule
            </h2>
            <!-- action, is empty bcs we execute logic in the same file -->
            <form action="" method="post">
                <?php
                foreach ($schedule as $name => $phone) {
                    echo '<input type="hidden" name="schedule[' . $name . ']" value="' . $phone . '"/>';
                }
                ?>
                <div style="margin-bottom:15px;">
                    <label for="name">First name:</label><br>
                    <input type="text" id="name" name="name" style="border-radius:5px;height: 20px;background-color:aquamarine;"><br>
                </div>
                <div style="margin-bottom:15px;">
                    <label for="phone">Phone number:</label><br>
                    <input type="text" id="phone" name="phone" style="border-radius:5px;height:20px;background-color:bisque;"><br>
                </div>
                <input type="submit" name="button" value="Save contact" style="border-radius:5px;height:30px;width:10%;">
            </form>
        </div>
        <div style=margin-top:30px;>
            <h3>Saved Contacts</h3>

            <ul style="margin-right:45px;list-style:inside;">
                <?php
                if (!empty($schedule)) {
                    foreach ($schedule as $key => $value) {
                        echo "<li style=margin-top:10px;>{$key} -- {$value}</li>";
                    }
                } else {
                    echo "<p>The schedule doesn't have contacts saved !</p>";
                }
                ?>
            </ul>

        </div>
    </div>
</body>

</html>