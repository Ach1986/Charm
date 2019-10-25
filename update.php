<?php
include_once('config.php');
if(isset($_POST['update'])){
 $id = $_POST['ID'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $gender = $_POST['gender'];
 $birthdate = $_POST['birthdate'];
 $department = $_POST['department'];
 $rank = $_POST['rank'];

 $sql = "UPDATE lhio.tblemployees ";
 $sql .= "set Efname =:fname, Elname= :lname, Egender= :gender, Ebirthdate= :bday, Edept= :dept, Rank= :rank ";
 $sql .= "where ID = :id";
 $query = $conn->prepare($sql);
 $query -> bindparam(':id', $id);
 $query -> bindparam(':fname', $firstname);
 $query -> bindparam(':lname', $lastname);
 $query -> bindparam(':gender', $gender);
 $query -> bindparam(':bday', $birthdate);
 $query -> bindparam(':dept', $department);
 $query -> bindparam(':rank', $rank);
 $query -> execute();

 echo "Succesfully updated" . "<br/>";
 echo "<a href = \"index.php\">Back</a>";
}
else{
    echo "ERROR: Restricted Access!";
}
?>