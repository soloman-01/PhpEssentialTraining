<html>
	<head>
		<title> For Loops </title>
	</head>
	<body> 
	
	<?php 
		for ($count=0; $count <= 10; $count++){
			echo $count . ", ";
		}
	?>
	
	<br/>
	<?php 
		for ($count=10; $count >= 0; $count--){
			if (($count % 2) != 0){
				echo "{$count} is an odd number. <br/>";
			}else {
				echo "{$count} is an even number. <br/>";
			}
		}
	?>
	
	</body>
</html>