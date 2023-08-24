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

	$items = array();
	$items[] = "Eric Purvis";
	$items[] = "Basant Gera";
	$items[] = "John Jon";
	
	sort($items);
	
	//$name='';
	//echo " <input type='hidden' name='$name' value='' />
	//<form id='mf' method='get' action='index2.php'>
	
	$URL="/?";
	foreach($items as $id => $item){
		$URL = $URL."item$id=".$item."&";
	}
	
	echo
	" 
		<table>
		
		  <tr>
			<th>ID</th>
			<th><a href='index2.php$URL'>Name</a></th>
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