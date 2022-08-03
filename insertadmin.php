<?php

include "config.php";



$oid = $_POST['oid'];
$cid = $_POST['cid'];
$mid = $_POST['mid'];
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$since = $_POST['since'];
$model = $_POST['model'];
$color = $_POST['color'];
$price = $_POST['price'];
$agecar = $_POST['agecar'];
$hp = $_POST['hp'];
$builtsince = $_POST['builtsince'];
$mname = $_POST['manufacturername'];
$coo = $_POST['countryoforigin'];
$fy = $_POST['foundationtyear'];

echo $name . " " . $age . " " . $sex . "<br>";

$sql_statement = "INSERT INTO owner(oid,name,age,sex)
					VALUES ('$oid','$name','$age','$sex')";

$result = mysqli_query($db, $sql_statement);


$sql_statement = "INSERT INTO manufacturer(mid,name,country_of_origin,foundation_year)
					VALUES ('$mid','$mname','$coo','$fy')";

$result = mysqli_query($db, $sql_statement);

$sql_statement = "INSERT INTO car(cid,model,color,age,price,hp)
					VALUES ('$cid','$model','$color','$agecar','$price','$hp')";

$result = mysqli_query($db, $sql_statement);


$sql_statement = "INSERT INTO owns(oid,cid,since)
					VALUES ('$oid','$cid','$since')";

$result = mysqli_query($db, $sql_statement);

$sql_statement = "INSERT INTO built(cid,mid,since)
					VALUES ('$cid','$mid','$builtsince')";

$result = mysqli_query($db, $sql_statement);

header ("Location: admin.php");



?>