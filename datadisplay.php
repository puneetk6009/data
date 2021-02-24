<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Storage</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="main">
		<div class="container">
			<div class="data_holder">
			<table border="2">
  <tr>
    <td>ID</td>
    <td>First Name</td>
    <td>Last NAme</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Project Duration</td>
    <td>Project type</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php


$records = mysqli_query($connection_obj,"select * from employee"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['firstname']; ?></td>
    <td><?php echo $data['lastname']; ?></td>    
    <td><?php echo $data['email']; ?></td>    
    <td><?php echo $data['phone']; ?></td>    
    <td><?php echo $data['projectduration']; ?></td>    
    <td><?php echo $data['projecttype']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
			</div>
		</div>
	</div>

	<?php 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
	?>

</body>
</html>