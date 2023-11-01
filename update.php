<?php
 include "config.php";
 

 if(isset($_POST['update'])){



$name=$_POST['name'];

$student_id=$_POST['student_id'];

$email=$_POST['email'];

$password=$_POST['password'];

$sql="UPDATE `student` set `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$student_id'";

$result=$conn->query($sql);

if($result==true){

    ?> <script> alert(" data updated successfully");  </script><?php
}else{
    echo" update failed";
}

 }

 if(isset($_GET['id'])){

    $student_id=$_GET['id'];

    $sql="SELECT * FROM `student` WHERE `id`='$student_id'";

    $result=$conn->query($sql);

    if($result->num_rows>0){

        while($row=$result->fetch_assoc()){

            $name=$row['name'];

            $email=$row['email'];

            $password=$row['password'];

            $id=$row['id'];
        
            ?>
            <h2> user update form</h2>
            
            <form action=""method="POST">

            <label>NAME :</label> <br><br>

            <input type="text" name="name" value="<?php echo $name; ?>">

                 <input type="hidden" name="student_id" value="<?php echo $id; ?>">

<br>

       <label>EMAIL :</label> <br><br>
       <input type="email"name="email" placeholder="enter your passwordd" value="<?php echo $email;?>" required><br><br>


       <label>PASSWORD :</label> <br><br>
       <input type="password"name="password" placeholder="enter your password" value="<?php echo $password;?>" required><br><br>

       <input type="submit"name="update" value="update">

            </form>

       <?php
        }
    }
}


?>