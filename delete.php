<?php
include ("connection.php");
$id= $_GET['id'];

$result=mysqli_query($connect, "delete from student where id=$id");
if($result==true){
    
    echo "<script>window.location.href='index.php'</script>";
}
?>