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

<tr> <th> OWNER ID </th><th> OWNER </th> <th> CAR ID </th><th> MODEL </th><th> COLOR </th></tr> 
SELECTION BY OWNER NAME 
<?php

include "config.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];


$sql_statement = "SELECT * FROM owner , car, owns WHERE owner.oid = owns.oid AND car.cid = owns.cid AND name = '$selection_id' ";

$result = mysqli_query($db, $sql_statement);


while($row = mysqli_fetch_assoc($result))
{
  $id = $row['cid'];
  $mname = $row['model'];
  $color = $row['color'];
  $oname = $row['name'];
  $id2 = $row['oid'];
 

  echo "<tr>" . "<th>" . $id2 . "</th>" . "<th>" . $oname . "</th>" . "<th>" . $id . "</th>" ."<th>" . $mname . "</th>"."<th>" . $color . "</th>" ."</tr>";
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