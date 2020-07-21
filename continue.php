<html>
	<head>
		<title> Continue </title>
	</head>
	<body>

	<?php 
		for ($count=0; $count <= 10; $count++){
			if ($count == 5) {continue;}
			echo $count . ",";
		}
	?>
	
	<br/>
	<?php 
		$count = 0;
		
		while ($count <= 10){
			if (($count % 2) == 0){
				$count++;  //unless this is done the loop gets stuck infinitely
				continue;
			}
			echo $count . ", ";
			$count++;
		}
	?>
	
	<br/>
	<?php 
		//Using continue while there's a loop inside another loop
		for ($i=1; $i <= 5; $i++){
			if (($i % 2) == 0){continue;}	//the default argument her is 1. i.e continue(1)
			for ($j=0; $j <= 5; $j++){
				if ($j == 3) {continue(2);}	//The argument in 2 defines the number of loops to continue back
				echo $i . "-" . $j . "<br/>";
			}
		}
	?>
	</body>
</html>