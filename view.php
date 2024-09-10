<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Using Function</title>
</head>
<body>
<?php
include("contact.php");
$data=$user-> recordlist();
if(isset($_GET['id'])){
    $del=$user->delete($_GET['id']);
    if($del){
        header('location:view.php');
    }else{
        echo $del;  
    }
   
}
?>
    <table border="2">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Edit</th>

        </tr>
<?php
foreach($data as $n){
?>
        <tr>
            <td><?php echo $n['name']; ?></td>
            <td><?php echo $n['age']; ?></td>
            <td><?php echo $n['password']; ?></td>
            <td><a href="view.php?id=<?php echo $n['id'];?>">Delete</a></td>
            <td><a href="update.php?id=<?php echo $n['id'];?>">Edit</a></td>
        </tr>
        <?php  }?>
    </table>
    <a href="form.php">Go For insert Data </a>
</body>
</html>