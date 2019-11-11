<html>
<head>

</head>
<body>

<!-- Ex. 4: Print name 50 times with for, while and dowhile -->

<?php 
$name = "Robert <br>";
for ($i = 0; $i < 50; $i++)
{
	echo $name;
}

$j = 0;

while( $j < 50 ) {
	echo $name;
	$j++;
}

$k = 0;

do {
	echo $name;
	$k++;
} while ( $k < 50 );


?>

</body>

</html>