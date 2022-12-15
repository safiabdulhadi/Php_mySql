<?php
include "db-config.php";
if(isset($_GET["update"])){
$id = $_GET["update"];
$query = "SELECT * FROM `items` WHERE `id` = '$id'";
$run = mysqli_query($con, $query);
$data = mysqli_fetch_array($run);

if(isset($_POST['submit'])) {
$title = $_POST["title"];
$detail = $_POST["detail"];
$date = $_POST["date"];

$query2 = "UPDATE `items` SET `title` = '$title', `detail` = '$detail' , `date` = '$date' WHERE `id` = '$id' ";
mysqli_query($con, $query2);
header("location:index.php");

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new project</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <form action="" class="form-group" method="POST">
                    <input type="text" class="form-control my-2" name="title" value="<?php echo $data['title']; ?>" placeholder="Enter your name">
                    <input type="text" class="form-control" name="detail" value="<?php echo $data['detail']; ?>" placeholder="Enter your Detail">
                    <input type="text" class="form-control  my-2" name="date" value="<?php echo $data['date']; ?>" placeholder="Enter the date">
                    <input type="submit" class="form-control mt-2" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>