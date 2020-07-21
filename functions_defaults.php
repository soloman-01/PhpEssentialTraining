<html>
	<head>
		<title> Functions: Default Argument Values </title>
	</head>
	<body>

	<?php 
		function paint($room="office", $color = "red"){
			return "The color of the {$room} is {$color}. <br/.";
		}
		
		//echo paint();
		echo paint("bedroom", "yellow");
		echo paint("dining room");
		

	?>
		
	</body>
</html>