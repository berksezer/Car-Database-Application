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

<tr><th> OWNER </th> <th> CAR ID </th><th> MODEL </th><th> COLOR </th> <th> MANUFACTURER </th></tr> 
SELECTION BY CAR MODEL
<?php

include "config.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];


$sql_statement = "SELECT * FROM owner, car, owns, built, manufacturer WHERE 
owner.oid = owns.oid AND car.cid = owns.cid AND car.cid = built.cid AND manufacturer.mid = built.mid AND model = '$selection_id' ";

$result = mysqli_query($db, $sql_statement);


while($row = mysqli_fetch_assoc($result))
{
  $id = $row['cid'];
  $mname = $row['model'];
  $color = $row['color'];
  $oname = $row['name'];
  $manufact = $row['mname'];

  echo "<tr>" . "<th>" . $oname . "</th>" . "<th>" . $id . "</th>" ."<th>" . $mname . "</th>"."<th>" . $color . "</th>" . "<th>" . $manufact . "</th>" ."</tr>";
}


}

else
{

  echo "The form is not set.";

}
?>


</table>
</div>

</body>
</html>