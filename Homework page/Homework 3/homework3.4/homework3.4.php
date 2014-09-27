<!DOCTYPE>
<html>
	<head>
		<title>Homework3.4</title>
	</head>
	<body>
		<h1> Form</h1>
			<form method="post" action= "form3.4.php"> <!--Start form and let the info pass to php document-->
				<p><b>Your Name : </b><input type="text" name="name" value="
					<?php if(isset($_POST['name'])) echo $_POST['name'];?>" /></p>
					<br>
				<p>Select date:</p>
					<select name="day">
						<?php
							for($day=1;$day<=31;$day++){
						    	echo '<option value='.$day.'>'.$day.'</option>';
							}
						?>
					</select>
					<select name="month">
						<option vlaue="Select one">Select one</option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="Mars">Mars</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
						</select>
					<select name="year">
						<?php
							for($year=1920;$year<=2005;$year++){
    							echo '<option value='.$year.'>'.$year.'</option>';
							}
 
						?>
					</select>
				<p><input type="submit" name="submit" value="Submit">
			</form>
				
	</body>
</html>