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
    <form action="addnew.php" method="POST">
        <label for="">FirstName</label><br/>
        <input type="text" name="firstname"><br/>
        <label for="">Last Name</label><br>
        <input type="text" name="lastname"><br>
        <label for="">Gender</label><br>
        <input type="text" name="gender"><br>
        <label for="">Birthdate</label><br>
        <input type="text" name="birthdate"><br>
        <label for="">Department</label><br>
        <input type="text" name="department"><br>
        <label for="">Rank</label><br>
        <input type="text" name="rank"><br>
        <input type="hidden" name="ID"><br/>
        <input type="submit" name = "add" value = "ADD"/>


    </form>
</body>
</html>