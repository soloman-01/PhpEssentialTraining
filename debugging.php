<html>
	<head>
		<title> Debugging </title>
	</head>
	<body>

	<?php 
		$number = 99;
		$string = "Bug?";
		$array = ["fname" => "Sam", "lname" => "Smith"];
		
		var_dump($number);
		var_dump($string);
		var_dump($array);
	?>
	
	<br/>
	<?php 
		print_r(get_defined_vars());
	?>
	
	<br/>
	<?php 
		var_dump(debug_backtrace());
	?>
	</body>
</html>