<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<?php 

include 'access.php';
$conn = localConnect();

$arr = array("customers.ID", "customers.lastName", "customers.firstName");
$joinarr = array("INNER JOIN reservation ON customers.ID = reservation.customerID", "INNER JOIN invoice ON reservation.ID = invoice.reservationID", "INNER JOIN car_return ON invoice.ID = car_return.invoiceID", "INNER JOIN additionalcharges ON car_return.ID = additionalcharges.returnID");

$arr2 = array("cars.licensePlate", "cars.model", "cars_condition.boughtOn");
$joinarr2 = array("INNER JOIN cars_condition ON cars.licensePlate = cars_condition.licensePlate");
$where = "WHERE cars_condition.boughtOn >= '2018-01-01'";

$arr3 = array("customers.ID", "customers.lastName", "customers.firstName", "reservation.ID", "invoice.invoice_date", "invoice.totalCost");
$joinarr3 = array("INNER JOIN reservation ON customers.ID = reservation.customerID", "INNER JOIN invoice ON reservation.ID = invoice.reservationID");
$where2 = "WHERE invoice.chargesPaid = 0";

createTable(runQuery($arr, "customers", $joinarr));
createTable(runQuery($arr2, "cars", $joinarr2, $where));
createTable(runQuery($arr3, "customers", $joinarr3, $where2));
$conn -> close();

?>

</tbody>
</table>


</body>




</html>


