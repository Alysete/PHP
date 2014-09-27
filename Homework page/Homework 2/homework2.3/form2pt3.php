<!DOCTYPE>
  <html>
  <head>
    <title>MatchGame</title>
    <link rel="stylesheet" type="text/css" href="css2.3.css">
    <link href='http://fonts.googleapis.com/css?family=News+Cycle|Bentham' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <h1 class="headder">Last Resort</h1> <!--I try to be funny-->
    <div class="leftcolumn">
    </div>
    <div class="abtyou">
    <?php
 					$FirstName = $_GET['FirstName']; //first name, last name, gender, birthday, user traits variables initialized in php
  				$LastName = $_GET['LastName'];
          $gender = $_GET['gender'];
          $bday = $_GET['bday'];
          $comments = $_GET['comments'];

                  echo "<p class='title'> Welcome to your profile! </p>";
       						echo "<p class='title'>Name:</p><p> $FirstName $LastName</p>";
       						echo "</br>";
 					 //using the variables to communicate with user about information they entered.
  							echo "<p class='title'>Gender: </p> <p> $gender</p></br><p class='title'> Birthday: $bday</p>";
  							echo "</br>";
          
          echo "<p class='title'>You describe yourself as:  </p>";
 					if(count ($_GET['trait'])>1){
            
              foreach($_GET['trait'] as $trait){
                
                echo "$trait ";
              }
          } else{
            echo "<p>You did not select any traits!</p>";
          }
          echo "<p class='title'>Your intro: </p><p>$comments</p>"; 
          ?>

        </div>
        <div class="abtthem">
        <?php
  							echo "</br>";
          $theirgender = $_GET['theirgender'];//gender, age range, and traits of users potential match. 
          $agemin = $_GET['agemin'];
          $agemax = $_GET['agemax'];
                echo "<p class='title'> You are looking for:</p></br><p class='title'> Gender:</p> <p> $theirgender </p>";
                $theirgender=1;
                if(count($_GET['theirgender'])>1){
                  echo " male and/or female";
                }
                else if(count($_GET['theirgender'])<1){
                  echo "a-sexual";
                }
                else {
                  echo " $theirgender[0]";
                }
                echo" </br>";
                echo"<p class='title'> Age range: </p>";
                 if($agemin>$agemax){
                  echo "<p> between $agemax to $agemin years old</p>";
                }
                else{
                 echo "<p> between $agemin to $agemax years old</p>";
                }
                echo"</br>";
               echo "<p class='title'> Who's: </p>";
             if(count ($_GET['theirtrait'])>1){
              foreach($_GET['theirtrait'] as $theirtrait){
                echo "$theirtrait ";
              }
          } else{
            echo "<p>You did not select any traits for your future love!</p>";
          }
                
    ?>
  </div>
  </body>
</html>

