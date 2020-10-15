<?php
if(isset($_POST['check'])){
$username=$_POST['name'];
$password=$_POST['password'];
//connect the data base to mysql
$con=mysqli_connect('localhost','root','','login');
if($con){
echo "data base connected"."<br>";
}else {
echo "data base not connected";
}
//update the data from client to database
  $update="UPDATE user SET password='$password' where username='$username'";
  $result=mysqli_query($con,$update);
  if($result){
   echo "updated";
  }else{
  echo "not updated";
  }
}
?>
<!DOCTYPE html
<html lang="en">
<head>
<meta 
charset="UTF-8">
<title>first start</title>
</head>
<body>
<form action ="update.php"method="post">
Enter the username<br><input type ="text" name="name"placeholder="ENTER THE FIRST NAME"><br>
Enter the password<br><input type ="password" name="password"placeholder="ENTER THE PASSWORD"><br>
<input type="submit" name="check">
</form>
</body>
</html>
