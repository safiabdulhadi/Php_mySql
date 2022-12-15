<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset</title>
</head>
<body>
    <?php
    $msg;

    echo isset($msg); // it false coz in the varaible it not set values

    $msg1 = "This is a test";

    echo isset($msg1). " " . " <br>"; // now is set it will give the value 1

    // we check on condition base
    if(isset($msg1)){

        echo "The value is set to " . $msg1;
    }else{
        echo "Error: " . $msg1;
    }
    ?>
</body>
</html>