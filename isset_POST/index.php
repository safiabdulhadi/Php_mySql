<?php
if(isset($_POST['submit'])){
 $theValue = $_POST["name"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset</title>
</head>
<body>
<h5 style="color: red;background-color:aqua; font-size:20px ; padding: 10px ; margin: 10px">This is the Value : <?php  echo $theValue; ?></h5>
    <form action="" method="POST">
        <input type="text" name="name">
        <button name="submit">Submit</button>
    </form>
</body>
</html>