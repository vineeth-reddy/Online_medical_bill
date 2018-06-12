<?php 
$error='';
if(isset($_POST['submit'])){
if(empty($_POST['user'])|| empty($_POST['pass'])){
$error="username or password is invalid";
}
else{
$user=$_POST['user'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","root","");
$db =mysqli_select_db($conn,"codexworld");
$query=mysqli_query($conn,"select * from userpass where user='$user' and pass='$pass' ");
$rows=mysqli_num_rows($query);
if($rows==1){
header("Location: index.php");
}
else{
$error="username or password is invalid";
}
mysqli_close($conn);
}
}


?>