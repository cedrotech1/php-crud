<?php
include ("connection.php");
 $id= $_GET['id'];
// select user data
$result=mysqli_query($connect, "select * from student where id=$id");
while ($row=mysqli_fetch_array($result)){
    $id=$row["id"];
     $names=$row["names"];
     $address=$row["address"];

}
?>
<?php
include ("connection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6" style='background-color:lightgray'>
                <h3>ADD STUDENTS</h3>
                <form action="finalupdate.php" method='post'><br>
                <input type="text" name='id' value='<?php echo $id ?>' hidden>
                    <input type="text" name='names' class='form-control' placeholder="ENTER YOUR NAMES" value='<?php echo $names ?>'><br>
                    <input type="text" name='address' class='form-control' placeholder='ENTER YOUR ADDRESS' value='<?php echo $address ?>'>
                    <br> <input type="submit" value="save changes" name='submit' class='btn btn-primary col-12'>
                </form>
            </div>
      
        </div>

    </div>
</body>

</html>
