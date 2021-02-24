<?php 
include 'conn.php';


//INSERT DATA IN TABLE

$first_name = mysqli_real_escape_string($connection_obj, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($connection_obj, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($connection_obj, $_REQUEST['email']);
$phone = mysqli_real_escape_string($connection_obj, $_REQUEST['number']);
$project_d = mysqli_real_escape_string($connection_obj, $_REQUEST['duration']);
$project_t = mysqli_real_escape_string($connection_obj, $_REQUEST['projects']);

 
if(empty($first_name))
{
die("sorry, you must enter your name");
}else{

	$sql = "INSERT INTO employee (firstname, lastname, email, phone, projectduration, projecttype) VALUES ('$first_name', '$last_name', '$email', '$phone', '$project_d', '$project_t')";
	if(mysqli_query($connection_obj, $sql)){
	    echo "Data Inserted";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection_obj);
	}
}




?>
</br>
