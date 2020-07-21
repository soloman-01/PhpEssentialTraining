<html>
	<head>
		<title> Array Functions </title>
	</head>
	<body>
	
	<?php $numbers = [6,80,3,11,40] ?>
	
	<pre>
	Sort: <?php sort($numbers); print_r($numbers) //Ascending Order ?><br/>
	Sort reverse: <?php rsort($numbers); print_r($numbers) //Descending Order ?><br/>
	</pre>
	
	<?php $words = ["hey", "you", "are", "these", "okay"] ?>
	<pre>
	Sort: <?php sort($words); print_r($words) //Ascending Order ?><br/>
	Sort reverse: <?php rsort($words); print_r($words) //Descending Order ?><br/>
	</pre>
	
	<!-- In order the convert and array into a string, 'implode' function is used. -->
	Implode: <?php echo $num_string = implode(" & ", $numbers); ?> <br/>
	<!-- Convert string into array -->
	Explode <?php  print_r(explode(" & ", $num_string)); //Opposite of implode ?> <br/>
	
	membership operator: <?php echo in_array("you", $words); //returns True or False ?>
	
	</body>
</html>