<?php
	$hobby1 = "cigar-smoking";
	$descriptor = "excellence-pissing";
	$passion = "no-holds-barred";
	$descriptor1 = "odd sense of humor";
	$kiansage = "5";
	$ainsleysage = "1.5";
	$hungry = "true";
	$movies = array('Batman Begins', 'The Dark Knight', 'The Dark Knight Rises', 'The Usual Suspects', 'The Departed');
?>

<DOCTYPE HTML>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<p>My name is Ryan Taylor and I am a <?php echo $hobby1; ?>, <?php echo $descriptor; ?>, <?php echo $passion; ?> family man with an <?php echo $descriptor1; ?>.</p> <p>Oh yeah, my two children are ages <?php echo $kiansage; ?> and <?php echo $ainsleysage; ?> years old.</p>
	<?php if($hungry){ ?>
	<p>I am always hungry!</p> </br>

	<?php }?>
	<p>I am a big fan of the following movies: 
	<?php 
		/*forEach($movies as $index => $movie){
			echo "<em>" . $movie . "</em>";
			if($index + 1 != count($movies) ){
				echo " , ";
			}
		}*/
	
		forEach($movies as $movie){
			echo "<p>" . $movie . "</p> \n";
		}
	?>
	</p>

</body>
</html>