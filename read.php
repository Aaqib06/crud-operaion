<?php
include "config.php";

$sql = "SELECT * from student";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>view</title>
</head>

<body>
    <h1> user page </h1>
    <table class="table">
        <tr>
            <th> ID</th>
            <th> NAME</th>
            <th> EMAIL</th>
            <th> PASSWORD</th>
            <th> ACTION</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>

                    <td><?php echo $row['name'] ?></td>

                    <td><?php echo $row['email'] ?></td>

                    <td><?php echo $row['password'] ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>

                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                </tr>


        <?php
            }
        } ?>
        

    </table>
</body>

</html>