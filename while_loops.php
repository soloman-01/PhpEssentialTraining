<html>
	<head>
		<title> While Loops </title>
	</head>
	<body> 
	
	<?php 
		$count = 0;
		
		while ($count <= 10){
			if ($count == 5) {
				echo "FIVE,";
			}else{
			echo $count . ",";
			}
			$count++;	//increments the value of count by 1
		}
	?>
	
	<br/>
	<?php 
		//Separating even and odd numbers 
		$num = 1;
		while ($num <= 10){
			if (($num % 2) == 0){
				echo "{$num} is an even number. <br/>";
			}else {
				echo "{$num} is an odd number. <br/>";
			}
			$num++;
		}
	?>
	
	</body>
</html>