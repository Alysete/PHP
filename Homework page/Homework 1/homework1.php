<!DOCTYPE> 
<html>
	<head>
		<title> Homework 1</title>
	</head>
	<body>
		<h3>Days of the Week in simple HTML:</h3> <!--simple HTML code prints days of the week-->
			<p>Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday</p>
	</br>
		<h3> Days of the week in PHP using echo:</h3> <!--php echo statement to print days of the week-->
			<?php
				echo "<p> Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday</p>";
			?>
	</br>
			<h3> Days of the week using an array:</h3> <!--php array with for loop to print days of the week-->
			<?php
				$dayoftheweek = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
				$arraylength=count($dayoftheweek);
				for ($x=0; $x<$arraylength; ++$x){
					echo $dayoftheweek[$x];
				}
			?>
	</body>
</html>