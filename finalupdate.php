<?php
include ("connection.php");
if (isset($_POST["submit"])) {
    echo $n = $_POST['names'];
    echo $ad = $_POST['address'];
    echo $id = $_POST['id'];

    $result=mysqli_query($connect, "update student set names='$n' , address='$ad' where id=$id");
if($result==true){
    echo "well inserted";
    echo "<script>window.location.href='index.php'</script>";
}

}

?>