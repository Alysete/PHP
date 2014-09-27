<!DOCTYPE>
  <html>
  <head>
    <title>MatchGame</title>
    <link rel="stylesheet" type="text/css" href="css2.3.css">
  </head>
  <body>
    <?php
 					$FirstName = $_GET['FirstName']; //first name, last name, gender, birthday, user traits variables initialized in php
  				$LastName = $_GET['LastName'];
          $gender = $_GET['gender'];
          $bday = $_GET['bday'];
              <div id="headmessage">
                  echo "<p>Welcome to your new profile!</p>"
              </div>
       						echo "<p>Thank you $FirstName $LastName for signing up for the BEST dating site out there today! We are committed to finding your perfect match.</p>";
       				<div id="abtyou">	
                if($gender=='female'){
                  <img src=""
                }	
                  echo "</br>";
 					 //using the variables to communicate with user about information they entered.
  							
                echo "<p> 
                Your gender is: $gender and your birthday is: $bday </p>";
  							echo "</br>";
          
          echo count ($_GET['trait']);
 					if(count ($_GET['trait'])>1){
            echo "<p>The traits you selected make you: </p>";
              foreach($_GET['trait'] as $trait){
                
                echo "$trait ";
              }
          } else{
            echo "<p>You did not select any traits!</p>";
          }

  							echo "</br>";
          $theirgender = $_GET['theirgender'];//gender, age range, and traits of users potential match. 
          $agemin = $_GET['agemin'];
          $agemax = $_GET['agemax'];
          echo count ($_GET['theirtrait']);
          if(count ($_GET['theirtrait'])>1){
            echo "<p>The traits you selected make you: </p>";
              foreach($_GET['theirtrait'] as $theirtrait){
                
                echo "$theirtrait ";
              }
          } else{
            echo "<p>You did not select any traits!</p>";
          }
              echo count($_GET['theirgender']);
                echo "<p>Now let's discuss your perfect match! </br> In the second part of the form, you indecated that you are interested in a";

                if(count($_GET['theirgender'])>1){
                  echo " male and/or female";
                }
                else if(count($_GET['theirgender'])<1){
                  echo "n a-sexual";
                }
                else {
                  echo " $theirgender[0]";
                }
                if($agemin>$agemax){
                  echo " between $agemax to $agemin years old";
                }
                else{
                 echo " between $agemin to $agemax years old";
                }
                
                
    ?>
  </body>
</html>

