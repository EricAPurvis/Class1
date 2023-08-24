<style>
	table{
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}
	
	td, th{
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}
	
	tr:nth-child(even){
		background-color:#dddddd;
	}

</style>

<?php

	$i=0;
	$items = array();
	while(isset($_GET["item$i"])){
		$items[]=$_GET["item$i"];		
		$i++;
	}
	
	rsort($items);
	
	echo
	" 
		<table>
		
		  <tr>
			<th>ID</th>
			<th><a href='../index.php'>Name</a></th>
		  </tr>
	";
	foreach($items as $id => $item){
		echo "<tr><td>$id</td><td>$item</td></tr>";
	}
	echo 
	"
		</table>
	";

	

?>