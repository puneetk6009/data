<?php
require('conn.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<!-- <p><a href="dashboard.php">Dashboard</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p> -->
<h1>Update Record</h1>
<?php


$id = $_GET['id']; // get id through query string

$qry = mysqli_query($connection_obj,"select * from employee where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $projectduration = $_POST['projectduration'];
    $projecttype = $_POST['projecttype'];

	
    $edit = mysqli_query($connection_obj,"update employee set firstname='$firstname', lastname='$lastname', email='$email', phone='$phone', projectduration='$projectduration', projecttype='$projecttype' where id='$id'");
	
    if($edit)
    {
        mysqli_close($connection_obj); // Close connection
        header("location:datadisplay.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<form method="POST">
  <input type="text" name="firstname" value="<?php echo $data['firstname'] ?>" placeholder="Enter Full Name" Required></br></br>
  <input type="text" name="lastname" value="<?php echo $data['lastname'] ?>" placeholder="Enter Full Name" Required></br></br>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter Full Name" Required></br></br>
  <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Enter Full Name" Required></br></br>
  <input type="text" name="projectduration" value="<?php echo $data['projectduration'] ?>" placeholder="Enter Full Name" Required></br></br>
  <input type="text" name="projecttype" value="<?php echo $data['projecttype'] ?>" placeholder="Enter Full Name" Required></br></br>
  <input type="submit" name="update" value="Update">
</form>
</div>
</div>
</body>
</html>