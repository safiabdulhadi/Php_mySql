<?php
include "db-config.php";

$query = "SELECT * FROM `items`";
$run = mysqli_query($con, $query);


// echo $data["title"] . " " . "<br>";
// echo $data["id"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New project</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <table class="table table-bordered border-primary"">
                    <tr>
                        <th>ID</th>
                        <th>Item</th>
                        <th>Detail</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    while($data = mysqli_fetch_assoc($run)){
                    ?>
                    <tr>
                        <td><?php echo $data['id'];?></td>
                        <td><?php echo $data['title'];?></td>
                        <td><?php echo $data['detail'];?></td>
                        <td><?php echo $data['date'];?></td>
                        <td><a href="delete_item.php?del=<?php echo $data['id'];?>" class="btn btn-primary">Delete</a></td>
                    </tr>
                    <?php
                     }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>