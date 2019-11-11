<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<?php 

$servername = "localhost"; # 127.0.0.1
$username = "root";
$password = "";
$dbname = "carrental";

// Create connection
$conn = @new mysqli($servername, $username, $password, $dbname);
#$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

# if(!$conn)

#array("table2"=>"fk_car")
/*
function runQuery($col="*",$table), $join="")
{
	$cols = implode(", ", $col);
	*/
	/*$join = $join;
	for ($i=0;$i < count($join);$i++) {
		$joins .= $join[$i];
	};*/
/*
	$sql = "SELECT $cols FROM $table";

	global $conn;
	$result = $conn -> query($sql);

	if($result->num_rows == 1){
		$rows = $result->fetch_assoc();
	}elseif($result->num_rows == 0){
		$rows = "No result";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
	}
	return $rows;
}

$arr = array("ID", "lastName", "firstName");
$test = array("")*/


/*;*/





$sql2 = "SELECT customers.lastName, customers.firstName, reservation.licensePlate, additionalcharges.chargeAmount, additionalcharges.reason 
FROM customers 
INNER JOIN reservation ON customers.ID = reservation.customerID 
INNER JOIN invoice ON reservation.ID = invoice.reservationID 
INNER JOIN car_return ON invoice.ID = car_return.invoiceID 
INNER JOIN additionalcharges ON car_return.ID = additionalcharges.returnID"; 

$result2 = $conn -> query($sql2); # mysqli_query($conn, $sql2);

if($result2->num_rows == 1){
	$rows2 = $result2->fetch_assoc();
}elseif($result2->num_rows == 0){
	$rows2 = "No result";
}else {
	$rows2 = $result2->fetch_all(MYSQLI_ASSOC);
}
?>


<?php

function createTable($result) {

$rows = $result;

echo "<table class='table'><thead class='thead-light'><tr>";

foreach($rows[0] as $key => $values) {
	echo "<th scope='col'>$key</th>";	
}

echo "</tr></thead><tbody>";

foreach($rows as $key => $row) {
	foreach( $row as $key2 => $value2) {
		echo "<td scope='col'>$row[$key2]</td>";
	}
	echo "</tr>";
	echo "</tbody>";
}
}

createTable($rows2);

$conn -> close();

/*$sql = "SELECT ID, lastName, firstName FROM customers";*/
/*$result = $conn -> query($sql);*/

?>

</tbody>
</table>


</body>




</html>


