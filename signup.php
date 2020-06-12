<html>
<header>
<link rel="stylesheet" href="st.css">
</header>
<body>
<form method="POST">
    <div id="master">
<h1>Enter user name</h1>
<input type="text" name="uname">
</br>
<h1>Enter PASSWORD</h1>
<input type="password" name="pass">
</br>
<input type="date" name="dob">
</br></br>
<input type="submit" name="submit" value="SignUp">
</div>
</form>
</body>
</html>
<?php
include "connection.php";
if(isset($_POST['submit']))
{
$user=$_POST['uname'];
$pass=$_POST['pass'];
$dob=$_POST['dob'];
//$dob=explode("/",$dob);
//$dob1="$dob[2]-$dob[1]-$dob[0]";
//$dob=date($dob);
$sql="INSERT INTO login(`user`,`pass`,`dob`) VALUES('".$user."','".$pass."','".$dob."')";
if($conn->query($sql))
{
    echo"DONE";
    echo $dob;
    //header("location:login.php");
}
else{
    echo"SIGNUP Failed";
}

}
?>