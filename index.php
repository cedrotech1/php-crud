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
                <form action="index.php" method='post'><br>
                    <input type="text" name='names' class='form-control' placeholder="ENTER YOUR NAMES"><br>
                    <input type="text" name='address' class='form-control' placeholder='ENTER YOUR ADDRESS'>
                    <br> <input type="submit" value="save" name='submit' class='btn btn-primary col-12'>
                </form>
            </div>
            <div class="col-md-6 h-100vh">
                <h3>LIST OF STUDENTS</h3>
                <table class='table table-striped datatable'>
                    <tr>
                        <td>id</td>
                        <td>names</td>
                        <td>address</td>
                        <td>modify</td>
                    </tr>
                   <?php
                   $result=mysqli_query($connect, "select * from student");
                   while ($row=mysqli_fetch_array($result)){
                    ?>    
                      <tr>  
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['names'];?></td> 
                         <td><?php echo $row['address'];?></td>
                         <td>
                            <a href="delete.php?id=<?php echo $row['id'];?>">
                            <button class='btn btn-danger'>delete</button>
                        </a>
                        <a href="update.php?id=<?php echo $row['id'];?>">
                            <button class='btn btn-success'>update</button>
                        </a>
                        </td>
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

<?php
if (isset($_POST["submit"])) {
    $n = $_POST['names'];
    $ad = $_POST['address'];

    $result=mysqli_query($connect, "insert into student values(null,'$n','$ad')");
if($result==true){
    echo "well inserted";
    echo "<script>window.location.href='index.php'</script>";
}

}

?>