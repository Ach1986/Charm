<?php include_once ('config.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addnewuser.php" method="POST">
        <label for="">Username</label><br/>
        <input type="text" name="username"><br/>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <label for="">role</label><br>
        <input type="text" name="role"><br>
        <input type="hidden" name="ID"><br/>
        <input type="submit" name = "add" value = "ADD"/>


    </form>
</body>
</html>