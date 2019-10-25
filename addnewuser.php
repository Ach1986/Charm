<?php
include_once('config.php');
if(isset($_POST['add'])){
 // $id = $_POST['ID'];

 $username = $_POST['username'];
 $password = $_POST['password'];
 $role = $_POST['role'];

 if(empty($username) || empty($password) || empty($role)){
         echo "One of the Fields is Empty"; 
    if(empty($username)){
         echo "Supply Username";
     }
     if(empty($password)){
         echo "Supply Password";
     }
     if(empty($role)){
        echo "Supply Role";
     }
     echo "<a href=\"add.php\">Back </a>";
 }
 else{
 $sql = "insert into lhio.tblusers ";
 $sql .= "(Username, Password, Role) ";
 $sql .= "values (:username, :password, :role) ";
 $query = $conn->prepare($sql);
 // $query -> bindparam(':id', $id);
 $query -> bindparam(':username', $username);
 $query -> bindparam(':password', $password);
 $query -> bindparam(':role', $role);
 $query -> execute();

 echo "Succesfully updated" . "<br/>";
 echo "<a href = \"index.php\">Back</a>";
 }
}
else{
    echo "ERROR: Restricted Access!";
}
?>