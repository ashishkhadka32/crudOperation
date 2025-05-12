<?php
require '../config/dbConn.php';

if(isset($_POST))
{
    $name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `companies`(`id`, `name`, `address`, `contact`, `email`) VALUES('', '$name','$address', '$contact', '$email')";
    $res = mysqli_query($conn, $sql);

    if($res){
        header("Location: ../view/displayCompany.php");
    }
    else{
        echo"not inserted";
    }
}
?>