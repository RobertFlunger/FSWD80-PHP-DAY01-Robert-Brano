<html>
<head>
	<style>
		
	</style>
</head>
<body>

<!-- Ex. 6: Define associative array and output elements. -->

<?php
$characters = array(
	"Super Mario" => array
	(
		"height" => 1.55,
		"weight" => 89,
		"ability" => "jumps high"
	),
	"Son Goku" => array
	(
		"height" => 1.75,
		"weight" => 62,
		"ability" => "super strong"
	),
	"Pikachu" => array
	(
		"height" => 0.4,
		"weight" => 6,
		"ability" => "super strong"
	)	
);

foreach( $characters as $key => $value ) {
	echo "<br> $key :<br>";
	foreach ($value as $key2 => $value2) {
		echo "$key2 = $value2 <br>";
	}
}


/*print_r($characters);*/

?>

</body>

</html>