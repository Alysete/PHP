<!Doctype>
  <html>
    <head> 
      <title> Homework 3.3</title>
    </head>
    <body>
      <?php /*start php section*/
        $FirstName = $_POST['FirstName']; /*initialize variable for first name*/
        $LastName = $_POST['LastName']; /*initialize variable for last name*/
             echo "<p> Your name is: $FirstName $LastName </p>"; /*prints out first and last names*/
             echo "</br>";
        $cats = $_POST['cats[]']; /*initialzes variable for gender*/
        	echo "<p> Do you like cats?: $cats </p>"; /*prints user gender*/
        	echo "</br>";
        $occupation = $_POST['occupation']; /*initializes variable for year*/
        	echo "<p> You are a: $occupation </p>"; /*prints user birth date*/
        	echo "</br>";
        $siblings = $_POST['siblings[]']; /*initializes variable for comments*/
        	echo "<p> You have $siblings siblings. </p>"; /*prints user notes*/
        	echo "</br>";

        echo "array 1: <br>";
        $cats = array(0 => "no", 1 => "yes");
        foreach ($cats as $x => $x_value) {
          
          echo "key=" .$x . ", Value = " . $x_value;
          echo "<br>";
        }
        echo " <br>array 2: <br>";
        $occupation = array("Student", "Faculty", "Staff");
        $arraylength=count($occupation);
        for ($i=0; $i <$arraylength ; $i++) {
          echo $occupation[$i];
          echo "<br>";
        }
        echo "<br>array 3: <br>";
        $siblings = array(0=> "0", 1=>"1", 2=>"2", 3=>"3", 4=>"4");
        foreach($siblings as $y => $y_value){
          echo "Key=" .$y .", Value = " . $y_value;
          echo "<br>";
        }

      ?>
    </body>
</html>