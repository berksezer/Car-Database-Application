ADMIN PANEL

<?php 

include "config.php";

include "messagesMain.php";

?>
 
<form action="sendadmin.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT cid FROM car";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
	$id = $id_rows['cid'];
	echo "<option value=$id>".$id."</option>";
}

?>
</select>

<button>DELETE</button>


</form>

<br>

<form action="insertadmin.php" method="POST">

	<input type="text" name="oid" placeholder="Type your ID">
	<input type="text" name="cid" placeholder="Type car ID">
	<input type="text" name="mid" placeholder="Type manufacturer ID">
	<input type="text" name="name" placeholder="Type your name">
	<input type="text" name="age" placeholder="Type your age">
	<input type="text" name="sex" placeholder="Enter your sex">
	<input type="text" name="since" placeholder="when did you bought this car">
	<input type="text" name="model" placeholder="Enter the model of your car">
	<input type="text" name="color" placeholder="Enter the color of your car">
	<input type="text" name="price" placeholder="Enter the value of your car">
	<input type="text" name="agecar" placeholder="Enter the age of the car">
	<input type="text" name="hp" placeholder="Enter the hp of your car">
	<input type="text" name="builtsince" placeholder="When was this car built for the first time">
	<input type="text" name="manufacturername" placeholder="manufacturer of this car">
	<input type="text" name="countryoforigin" placeholder="country of origin of this car">
	
	
	

<button>INSERT</button>


</form>

<br>
SELECT BY COLOR
<br>

<form action="selectadmin.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT DISTINCT color FROM car";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
	$id = $id_rows['color'];
	echo "<option value=$id>".$id."</option>";
}

?>
</select>

<button>SELECT</button>


</form>


</form>

<br>
SELECT BY OWNER NAME
<br>

<form action="selectadmin2.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT DISTINCT name FROM owner";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
	$id = $id_rows['name'];
	echo "<option value=$id>".$id."</option>";
}

?>
</select>

<button>SELECT</button>


</form>


</form>

<br>
SELECT BY MANUFACTURER
<br>	

<form action="selectadmin3.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT DISTINCT mname FROM manufacturer";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
	$id = $id_rows['mname'];
	echo "<option value=$id>".$id."</option>";
}

?>
</select>

<button>SELECT</button>


</form>

<br>
SELECT BY MODEL
<br>	

<form action="selectadmin4.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT DISTINCT model FROM car";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
	$id = $id_rows['model'];
	echo "<option value=$id>".$id."</option>";
}

?>
</select>

<button>SELECT</button>


</form>