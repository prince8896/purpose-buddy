<?php
    include("contact.php");

    
    if(isset($_POST["submit"])){
       $user->addrecord($_POST);
    }
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
    <input type="text"  name="name" placeholder="Enter Your Name.."><br> <br>
    <input type="number" name="age" placeholder="Enter Your age.."><br><br>
    <input type="password" name="password" placeholder="Enter Your Password.."> <br><br>
    <input type="submit" value="submit" name="submit">
    </form>
    
</body>
</html>