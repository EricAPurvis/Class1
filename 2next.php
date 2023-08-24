<html>


	<head>

	</head>
	
	<?php
	
		$User = $_GET['Username'];
		$Pass = $_GET['Password'];
	
		echo "Username: $User<br>";
		echo "Password: $Pass<br>";
		
		$valid=1;
		$Lower = "/[a-z]/";
		$Upper = "/[A-Z]/";
		$Number = "/[0-9]/";
		$Special = "/[!a-z][!0-9]/i";
		$Len = strlen($User);
		
		if(
		preg_match($Lower, $User)
		&&
		preg_match($Upper, $User)
		&&
		preg_match($Number, $User)
		&&
		preg_match($Special, $User)
		&&
		$Len>=8
		){
			$valid=0;
		}
		
		echo "<br>";
		switch($valid){
			
			case 0://true
				echo "<font color='green'>Username Meets Requirements</font><br>";
				break;
				
			case 1://false
				echo "<font color='red'>Username Does Not Meet Requirements</font><br>";
				break;
				
		}
		
		echo "<br><br>";
		
		$_GET['Eric']='Purvis';
		$LastName=$_GET['Eric'];
		
		echo "Eric: $LastName<br>";
		
		$_GET['Basant']='Gera';
		$LastName=$_GET['Basant'];
		
		echo "Basant: $LastName";
		

	
	?>
	
	<body bgColor=#ffffff>
	
	
	</body>
	


</html>