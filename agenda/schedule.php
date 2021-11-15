<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Activity 2: Contacts Schedule</title>
</head>

<body>
    <?php
    $_schdeule = [
        "Pau" => "661610908",
        "Papi" => "677394680"
    ];

    ?>
    <div style="text-align:center;">
        <div>
            <h2>
                Form Schedule
            </h2>
            <form>
                <div style="margin-bottom:15px;">
                    <label for="name">First name:</label><br>
                    <input type="text" id="name" name="name" style="border-radius:5px;height: 20px;background-color:aquamarine;"><br>
                </div>
                <div style="margin-bottom:15px;">
                    <label for="phone">Phone number:</label><br>
                    <input type="text" id="phone" name="phone" style="border-radius:5px;height:20px;background-color:bisque;"><br>
                </div>
                <input type="submit" value="Save contact" style="border-radius:5px;height:30px;width:10%;">
            </form>
        </div>
        <div style=margin-top:30px;>
            <h3>Saved Contacts</h3>

            <ul style="margin-right:45px;list-style:inside;">
                <?php
                if (count($_schdeule) > 0) {
                    foreach ($_schdeule as $key => $value) {
                        echo "<li>{$key} -- {$value}</li>";
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