<?php
$con=mysqli_connect('localhost','root');
if ($con) {
  echo "connection succesful";
}
else {
  echo "unsuccesful";
}

mysqli_select_db($con,'cotactform');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comments'];

$query="insert into contactdata(user,email,mobile,comments)values('$user','$email','$mobile','$comments')";
mysql_query($con,$query);


?>
