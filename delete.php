<?php
include_once ('config.php');

//getting id of the data from url
$id = $_GET['key'];

//deleting the row from table
$sql = "DELETE FROM lhio.tblemployees WHERE ID=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));
echo "SUCCESSFULLY DELETED" . "<br/r>";
echo "<a href = \"index.php\">Back<a/>";

//redirecting to the display page (index.php in our case)
//header("Location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>