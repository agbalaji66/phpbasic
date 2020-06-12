<html>
<body>
<form method="post" name="form1">
<h1>Enter user name</h1>
<input type="text" name="user" id="user">
<h1>Enter Password</h1>
<input type="text" name="pass" id="pass">
<input type="submit" value="LOGIN" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
$user=$_POST["user"];
$pass=$_POST['pass'];
$host="localhost";
$admin="root";
$pws="";
$db="example";
$conn=new mysqli($host,$admin,$pws,$db);
if($conn->connect_error)
{
    echo"DBerror";
}
$sql="SELECT * FROM LOGIN WHERE user ='$user'";
if($result=$conn->query($sql))
{
while($row=($result->fetch_assoc())){
$newuser=$row["user"];
$newpass=$row["pass"];
echo $newpass;
if($pass == $newpass);
{ session_start();
    $_SESSION['name']=$newuser;
    $_SESSION['status']="Active";
    header("location:home.php");
}
}
}
else
{
    echo"fetch error";}

}
?>