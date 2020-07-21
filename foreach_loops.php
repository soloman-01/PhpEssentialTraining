<html>
	<head>
		<title> For Each Loops </title>
	</head>
	<body> 
	
	<?php 
		$ages =  [14, 19, 30, 45, 70];
		
		foreach($ages as $age){
			echo "Age: {$age} <br/>";
		}
	?>
	
	<?php 
		//For associative arrays
		$person = array(
					"first_name" => "Kevin",
					"last_name" => 'Skougland',
					"address" => "123 Main Street",
					"zip_code" => "44600"
					);
		foreach ($person as $attribute => $data){
			$attr_nice = ucwords(str_replace("_"," ", $attribute));
			echo "{$attr_nice}: {$data}<br/>";
		}
	?>
	
	</body>
</html>