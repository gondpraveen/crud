<?php
include 'index.php';
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
    <button><a href="user.php">add</a></button>
    <table border="1">
        <tr>
            <td>id</td> 
            <td>name</td>
            <td>password</td>
            <td>email</td>
            <td>mobile</td>
            <td>acrtion</td>
        </tr>

        <?php
        $sql="select * from singh";
        $res=mysqli_query($con,$sql);
        if($res){
           while($row=mysqli_fetch_assoc($res)){
              $id=$row['id'];
              $name=$row['name'];
              $password=$row['password'];
              $email=$row['email'];
              $mobile=$row['mobile'];
              echo '<tr>
              <td>'.$id.'</td>
              <td>'.$name.'</td>  
              <td>'.$password.'</td>
              <td>'.$email.'</td>
              <td>'.$mobile.'</td>
              <td>
              <button><a href="update.php ?updateid='.$id.'">update</a></botton>
              <button><a href="delete.php ?deleteid='.$id.'">delete</a></botton>
              </td>
              </tr>';
           }
            
        }
        ?>
    </table>
    
    
</body>
</html>