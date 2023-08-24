




<?php

	$valid=false;
	$User = $_GET['Username'];
	$Pass = $_GET['Password'];
	
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
		$valid=true;
	}
	
	$_GET['Username']=$User;
	$_GET['Password']=$Pass;

?>

<script>
	
	var x = "<?php echo"$valid"?>";
	
	console.log(x);
	
	if(x){
		location='next.php';
	}else{
		location='index.php';
	}

</script>