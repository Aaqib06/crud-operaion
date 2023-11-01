<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
       <h1> sign up from</h1>
       <form action=""method="POST">

       <label>NAME :</label> <br><br>
       <input type="text"name="name" placeholder="enter your name" required><br><br>

       <label>EMAIL :</label> <br><br>
       <input type="email"name="email" placeholder="enter your passwordd" required><br><br>


       <label>PASSWORD :</label> <br><br>
       <input type="password"name="password" placeholder="enter your password" required><br><br>

       <input type="submit"name="submit" value="submit">

       </form>
</body>
</html>

<?php
  if(isset($_POST['submit'])){

    $name=$_POST['name'];

    $email=$_POST['email'];

    $password=$_POST['password'];

    $sql="INSERT INTO `student`(`name`,`email`,`password`)  VALUES ('$name','$email','$password')";
  
    $result= $conn->query($sql);

    if($result==true){

        ?> <script>alert("data inserted into database");</script><?php

    } else{
        echo" failed";
    }


  }


?>



