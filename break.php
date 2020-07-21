<html>
	<head>
		<title> Break </title>
	</head>
	<body>

	<?php 
		for ($count=0; $count <= 10; $count++){
			if ($count == 5) {break;}
			echo $count . ",";
		}
	?>
	
	<br/>
	<?php 
		//Using continue while there's a loop inside another loop
		for ($i=1; $i <= 5; $i++){
			if (($i % 2) == 0){continue;}	//the default argument her is 1. i.e break(1)
			for ($j=0; $j <= 5; $j++){
				if ($j == 3) {break(2);}	//The argument in 2 defines the number of loops to break out of
				echo $i . "-" . $j . "<br/>";
			}
		}
	?>	
	</body>
</html>