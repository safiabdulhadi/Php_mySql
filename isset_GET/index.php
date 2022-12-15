<?php
if(isset($_GET['submit'])){
 $theValue = $_GET["color"];


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
<body style="background-color :<?php echo $theValue ; ?> ">
    <form method="GET">
        <h5>Choose A Color :</h5>
     <select name="color">
        <option>yellow</option>
        <option>red</option>
        <option>black</option>
        <option>white</option>
      </select>
      <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>