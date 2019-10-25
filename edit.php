<?php
include_once('config.php');
//if(!isset($_GET['key']));
//{
//   header("location:index.php");
//}
$eid = $_GET['key'];
$efname = $_GET['fname'];
echo "Editting Employee ID: " . $eid . " : {$efname}";

$sql = "SELECT * FROM lhio.tblemployees WHERE id =:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $eid));
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $firstName = $row['Efname'];
    $lastName = $row['Elname'];
    $gender =  $row['Egender'];
    $bday =  $row['Ebirthdate'];
    $dept =  $row['Edept'];
    $rank =  $row['Rank'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="update.php"method="POST">
    <label for="">First Name</label><br>
    <input type="text" name="firstname" value ="<?php echo $firstName ?>"><br>
    <label for="">Last Name</label><br>
    <input type="text" name="lastname" value ="<?php echo $lastName ?>"><br>
    <label for="">Gender</label><br>
    <input type="text" name="gender" value ="<?php echo $gender ?>"><br>
    <label for="">Birthdate</label><br>
    <input type="text" name="birthdate" value ="<?php echo $bday ?>"><br>
    <label for="">Department</label><br>
    <input type="text" name="department" value ="<?php echo $dept ?>"><br>
    <label for="">Rank</label><br>
    <input type="text" name="rank" value ="<?php echo $rank ?>"><br>
    <input type="hidden" name="ID" value ="<?php echo $eid?>"?>
    <input type="submit" name = "update" value = "Update"/>

    </form>
</body>
</html>