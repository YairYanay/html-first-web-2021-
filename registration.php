<?php

session_start();

$con = mysql_connect('localhost','root','123456')

mysql_select_db($con, 'login web');

$name= $_post['Username'];
$pass = $_post['Password'];
$email = $_post['Email'];

$s = "select * from usertable where name = '$name'";

$result = mysql_query($con, $s);

$num = mysql_num_rows($result);

if($num == 1)
{
    echo " Username Already Taken";
}
else
{
    $reg = " insert into usertable(Username , Password , Email) values ('$name', '$pass', '$email')";
    mysql_query($con, $reg);
    echo "Registration Successfil";
}

?>