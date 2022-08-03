<!DOCTYPE html>
<html>
<head>
	<title>MAIN PAGE</title>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.button2 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


</head>
<body>
 
<div align="center">
<b>Welcome to the Ultimate Car Database</b>
<br>
<br>
Here are the informations of the cars in our database: 
<br>
<br>



<?php 
include "messages.php";
?>

<br>
Please enter the information of your car: 
<br>
<form action="sendmsg.php" method="POST">

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
	
	<button class="button2">SEND</button>
	
</form>



</body>
</html>