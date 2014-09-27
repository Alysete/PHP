<!DOCTYPE>
<html>
	<head>
		<title>Homework2</title>
	</head>
	<body>
		<h1> Form</h1>
			<form action= "form.php">
				<p>First Name</p>
					<input type="text" name="FirstName" value="Please enter your name."/>
				<p> Last Name</p>
					<input type="text" name="LastName" value="Please enter your last name"/>
				<p>Gender</p>
					<input type="radio" name="gender" value="male"/>
					<input type="radio" name="gender" value="female"/>
				<p>School Year</p>
					<input type="checkbox" name="year" value="freshman"/>
					<input type="checkbox" name="year" value="sophomore"/>
					<input type="checkbox" name="year" value="junior"/>
					<input type="checkbox" name="year" value="senior"/>
				<p>Any Comments?</p>
					<textarea name="comments" rows="3" cols="20">
					If you have any comments, enter them here!
					</text area>
				<input type="submit" name="submit"/>
			</form>
	</body>
</html>	