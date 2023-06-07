<?php
include 'index.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
$sql="update singh set  id=$id ,name=$name, password= $password, email=$email, mobile=$mobile where id=$id";
    $res=mysqli_query($con,$sql);
    if($res){
        header('location:display.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="display.php" method="post">
        name:<input type="text" name ="name"><br>
        password:<input type="text" name ="password"><br>
        email:<input type="text" name ="email"><br>
        mobile:<input type="text" name ="mobile"><br>
        <input type="submit" name ="submit"><br>
    </form>
    
</body>
</html>