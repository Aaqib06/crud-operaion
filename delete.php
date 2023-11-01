<?php
include ("config.php");

if(isset($_GET['id'])){

    $student_id=$_GET['id'];

    $sql="DELETE FROM `student`WHERE `id`='$student_id'";

    $result=$conn->query($sql);

    if($result==true){?>

        <script>  alert(" data deleted successfully"); </script>
       
   <?php }else{
    
        echo" failed";
    }
}


?>