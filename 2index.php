<html>


	<head>

	</head>
	
	<body bgColor=#ffffff>
	
		<div id='Panel' style='position:absolute; background-color:#4CAF50; width:45%; height:40%; left:27%; top:30%;'>
		
			<form action="/next.php" method="get">
			
				<label style='position:absolute; width:50%; height:25px; left:25%; top:25%;'><b>Username:</b></label>
				<input type="text" id="Username" name="Username" style='position:absolute; width:50%; height:25px; left:25%; top:30%;' onkeyup='CheckQs()'> </input>

				<label style='position:absolute; width:50%; height:25px; left:25%; top:40%;'><b>Password:</b></label>
				<input type="password" id="Password" name="Password" style='position:absolute; width:50%; height:25px; left:25%; top:45%;'> </input>
			
				<button type='submit'> Get Info </button>
				
			</form>
			
			
			<div  style='position:absolute; right:35%; bottom:10%;'>
				<label style='position:relative;'><b>Lower Case:</b></label>
				<input type="checkbox" id="LC" disabled=true style='position:relative; width:25px; height:25px;'>
			</div>
			
			<div style='position:absolute; right:35%; bottom:20%;'>
				<label style='position:relative;'><b>Upper Case:</b></label>
				<input type="checkbox" id="UC" disabled=true style='position:relative; width:25px; height:25px;'>
			</div>
			
			<div style='position:absolute; right:60%; bottom:30%;'> 
				<label style='position:relative;'><b>Special Case:</b></label>
				<input type="checkbox" id="SC" disabled=true style='position:relative; width:25px; height:25px;'>
			</div>
			
			<div style='position:absolute; right:60%; bottom:20%;'>
				<label style='position:relative;'><b>Number:</b></label>
				<input type="checkbox" id="NUM" disabled=true style='position:relative; width:25px; height:25px;'>
			</div>
			
			<div style='position:absolute; right:60%; bottom:10%;'>
				<label style='position:relative;'><b>Length(8):</b></label>
				<input type="checkbox" id="LEN" disabled=true style='position:relative; width:25px; height:25px;'>
			</div>
			
			

		
		
		
		</div>
	
	</body>

</html>