<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>

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

<tr> <th> CAR ID </th> <th> OWNER ID </th> <th> MANUFACTURER ID </th> <th> MODEL </th> <th> COLOR </th> <th> AGE </th> <th> PRICE </th> <th> HP </th> <th>OWNER</th> <th> AGE </th> <th> SEX </th> <th> OWNS SINCE </th> <th> MANUFACTURER </th><th> COUNTRY OF ORIGIN </th>  <th> Built Since </th></tr> 

<?php

include "config.php";


$sql_statement = "SELECT * FROM owner, car, owns, built, manufacturer WHERE 
owner.oid = owns.oid AND car.cid = owns.cid AND car.cid = built.cid AND manufacturer.mid = built.mid";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['cid'];
  $id2 = $row['oid'];
  $id3 = $row['mid'];

  $cname = $row['model'];
  $color = $row['color'];
  $age = $row['age'];
  $price = $row['price'];
  $hp = $row['hp'];

  $ownername = $row['name'];
  $age2 = $row['age']; /// age sıkıntılı 
  $sex = $row['sex'];
  $sinceown = $row['since'];

  $mname = $row['mname'];
  $corigin = $row['country_of_origin'];
  $sinceb = $row['sincebuild'];
	
  

	echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $id2 . "</th>" . "<th>" . $id3 . "</th>" . "<th>" . $cname . "</th>" . "<th>" . $color . "</th>" . "<th>" . $age . "</th>"."<th>" . $price . "</th>" . "<th>" . $hp .  "</th>" . "<th>" . $ownername .  "</th>" . "<th>" . $age2 .  "</th>" . "<th>" . $sex  .  "</th>" . "<th>" . $sinceown  .  "</th>" . "<th>" . $mname  .  "</th>". "<th>" . $corigin  .  "</th>" . "<th>" . $sinceb  .  "</th>";
}

?>

</table>
</div>

</body>
</html>