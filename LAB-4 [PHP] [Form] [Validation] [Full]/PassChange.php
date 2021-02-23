<?php
	$cpassword = $_POST['cpassword'];
    $npassword = $_POST['npassword'];
    $rpassword = $_POST['rpassword'];

	
    if ($cpassword == $npassword ) 
    {
        echo "Password Error";

    }
    else 
    {

    }
	
		if($rpassword == $npassword)
        {

		}
    else
    {
        echo "Password Error";

    }
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
			<legend>CHANGE PASSWORD</legend>

				Current Password  <input type ="text" name="cpassword"> </input><br><br>
				<font color ="green">New Password </font><input type ="text"name="npassword"> </input><br><br>
                <font color ="red">Retype New Password </font><input type ="text"name="rpassword"> </input><br>



	
			</select>

			
			<br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>