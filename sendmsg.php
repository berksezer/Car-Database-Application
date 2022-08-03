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

echo $name . " " . $age . " " . $sex . "<br>";

$sql_statement = "INSERT INTO owner(oid,name,age,sex)
					VALUES ('$oid','$name','$age','$sex')";

$result = mysqli_query($db, $sql_statement);


$sql_statement = "INSERT INTO manufacturer(mid,mname,country_of_origin)
					VALUES ('$mid','$mname','$coo')";

$result = mysqli_query($db, $sql_statement);

$sql_statement = "INSERT INTO car(cid,model,color,age,price,hp)
					VALUES ('$cid','$model','$color','$agecar','$price','$hp')";

$result = mysqli_query($db, $sql_statement);


$sql_statement = "INSERT INTO owns(oid,cid,since)
					VALUES ('$oid','$cid','$since')";

$result = mysqli_query($db, $sql_statement);

$sql_statement = "INSERT INTO built(cid,mid,sincebuild)
					VALUES ('$cid','$mid','$builtsince')";

$result = mysqli_query($db, $sql_statement);

header ("Location: index.php");




?>