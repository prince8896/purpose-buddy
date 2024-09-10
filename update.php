<?php
    include("contact.php");

    
  
    
    if($_GET['id']){
       
       $data=$user->getformdata($_GET['id']);
      // echo "<pre>";print_r($data); die;
    }

    if(isset($_POST['update'])){
    $update=$user->updaterecord($_POST,$_GET['id']);
    if($update){
        header("location:view.php");
    }}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="view.php">view data</a>
    <form method="POST">
    <input type="text" value="<?php echo $data['name']; ?>" name="name" placeholder="Enter Your Name.."><br> <br>
    <input type="number" value="<?php echo $data['age']; ?>" name="age" placeholder="Enter Your age.."><br><br>
    <input type="password" value="<?php echo $data['password']; ?>" name="password" placeholder="Enter Your Password.."> <br><br>
    <input type="submit" value="update" name="update">
    </form>
    
</body>
</html>