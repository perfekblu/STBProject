<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            $name = htmlspecialchars($_POST['name']);
            $age = (int)$_POST['age'];

            echo "$name" . "\t";
            echo "$age" . "<br>";
        ?>
    </body>
</html>