<?php
include_once('config.php');
if(isset($_POST['add'])){
 // $id = $_POST['ID'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $gender = $_POST['gender'];
 $birthdate = $_POST['birthdate'];
 $department = $_POST['department'];
 $rank = $_POST['rank'];
 if(empty($firstname) || empty($lastname) || empty($gender) || empty($birthdate) || empty($department) || empty($rank)){
         echo "One of the Fields is Empty"; 
    if(empty($firstname)){
         echo "No First Name";
     }
     if(empty($lastname)){
         echo "No Last Name";
     }
     if(empty($gender)){
        echo "No Gender";
     }
     if(empty($birthdate)){
        echo "No Birtdate";
     }
     if(empty($department)){
        echo "No Department";
     }    
     if(empty($rank)){
        echo "No Rank";
     }
     echo "<a href=\"add.php\">Back </a>";
 }
 else{
 $sql = "insert into lhio.tblemployees ";
 $sql .= "(Efname, Elname, Egender, Ebirthdate, Edept, Rank)";
 $sql .= "values (:fname, :lname, :gender, :bday, :dept, :rank)";
 $query = $conn->prepare($sql);
 // $query -> bindparam(':id', $id);
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
}
else{
    echo "ERROR: Restricted Access!";
}
?>