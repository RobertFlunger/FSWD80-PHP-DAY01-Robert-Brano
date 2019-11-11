<html>
<head>
	<style>
		
	</style>
</head>
<body>

<!-- Ex. 2: If Monday say: Happy Monday! -->

<?php
$d=date("D");

if ($d=="Mon" )
	echo "Happy Monday!<br>";
else
	echo "Have a nice day!<br>" ;

/*Ex. 3: Include statement for every day*/

if ($d=="Mon" )
	echo "Today is Monday!";
elseif ($d=="Tue")
	echo "Today is Tuesday!" ;
elseif ($d=="Wed")
	echo "Today is Tuesday!" ;
elseif ($d=="Thu")
	echo "Today is Tuesday!" ;
elseif ($d=="Fri")
	echo "Today is Tuesday!" ;
elseif ($d=="Sat")
	echo "Today is Tuesday!" ;
elseif ($d=="Sun")
	echo "Today is Tuesday!" ;
?>

</body>

</html>