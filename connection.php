<?php
$host="localhost";
$admin="root";
$pws="";
$db="example";
$conn=new mysqli($host,$admin,$pws,$db);
if($conn->connect_error)
{
    echo"DB error";
}
?>