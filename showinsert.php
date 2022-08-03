<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>

<div align="center">

	<table>

<tr> <th> CAR ID </th> <th> OWNER ID </th> <th> MANUFACTURER ID </th> <th> MODEL </th> <th>OWNER</th> <th> MANUFACTURER </th><th> COLOR </th></tr> 

<?php

include "config.php";

//$sql_statement = "SELECT * FROM owner";

//$sql_statement = "SELECT * FROM owner, car, owns WHERE owner.oid = owns.oid AND car.cid = owns.cid";

$sql_statement = "SELECT * FROM owner, car, owns, built, manufacturer WHERE 
owner.oid = owns.oid AND car.cid = owns.cid AND car.cid = built.cid AND manufacturer.mid = built.mid";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['cid'];
  $id2 = $row['oid'];
  $id3 = $row['mid'];
  $ownername = $row['name'];
  $mname = $row['mname'];
	$color = $row['color'];
  $cname = $row['model'];

	echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $id2 . "</th>" . "<th>" . $id3 . "</th>" . "<th>" . $cname . "</th>" . "<th>" . $ownername . "</th>" . "<th>" . $mname . "</th>"."<th>" . $color . "</th>" ."</tr>";
}

?>

</table>
</div>

</body>
</html>