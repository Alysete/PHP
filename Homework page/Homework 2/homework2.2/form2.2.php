<!Doctype>
  <html>
    <head> 
      <title> Homework 2.2</title>
    </head>
    <body>
      <?php /*start php section*/
      //  function validateName ($FirstName, $fieldName){ /*if statement to validate first name (just an experiment)*/
          global $errorCount;
          /*if(empty($FirstName)){
            echo"<p>The field $fieldName is required.</p>";
            ++$errorCount;
            $retval="";
          } 
        }*/
        $FirstName = $_GET['FirstName']; /*initialize variable for first name*/
        $LastName = $_GET['LastName']; /*initialize variable for last name*/
             echo "<p> Your name is: $FirstName $LastName </p>"; /*prints out first and last names*/
             echo "</br>";
        $gender = $_GET['gender']; /*initialzes variable for gender*/
        	echo "<p> You are a: $gender </p>"; /*prints user gender*/
        	echo "</br>";
        $year = $_GET['year']; /*initializes variable for year*/
        	echo "<p> You are currently a: $year </p>"; /*prints user birth date*/
        	echo "</br>";
        $comments = $_GET['comment']; /*initializes variable for comments*/
        	echo "<p> Your additional notes: $comment </p>"; /*prints user notes*/
        	echo "</br>";
      ?>
    </body>
</html>