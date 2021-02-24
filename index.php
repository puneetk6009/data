<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="main">
		<div class="form_holder">
			<div class="container">
				<div class="inner_form">
					
					<form action="insert.php" method="POST">
						<div class="input_textarea">
							<!-- <input type="text" name="" placeholder="User Id"> -->
							<input type="text" placeholder="First Name" name="first_name">
							<input type="text" placeholder="Last Name" name="last_name">
							<input type="email" placeholder="Email" name="email">
							<input type="number" placeholder="Phone Number" name="number">
						</div>
						
						<p>Project Duration</p>
						  <input type="radio" name="duration" value="1 week"> 1 week
						  <input type="radio" name="duration" value="2 week"> 2 week
						  <input type="radio" name="duration" value="3 week"> 3 week

						<label for="cars">Projects</label>
						  <select name="projects" id="projects">
						    <option name="project_selected" value="Web Application">Web Application</option>
						    <option name="project_selected" value="Website">Website</option>
						    <option name="project_selected" value="Ios App">Ios App</option>
						    <option name="project_selected" value="Android App">Android App</option>
						  </select>  

						<input type="submit" value="Submit" class="form_submit">

					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>