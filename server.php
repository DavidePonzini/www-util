<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER</title>
</head>
<body>
    <pre><?php
            foreach($_SERVER as $key => $val) {
                echo '<b>[' . $key .'] => </b>' . $val . '<br>';
            }
    ?></pre>
</body>
</html>


