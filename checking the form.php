<?php
if(isset($_POST['check'])){
$username=$_POST['name'];
$password=$_POST['password'];
if($username&& $password){
echo "<h1>Its working</h1>"."<br>";
echo "your username is : ".$username."<br>";
echo "your password is : ".$password."<br>";
}else{
echo "field is empty";
}
//connect the data base to mysql
$con=mysqli_connect('localhost','root','','login');
if($con){
echo "data base connected";
}else {
echo "data base not connected";
}
//insert the data from client to database
$insert="INSERT INTO user(username,password) VALUES('$username','$password')";
$result=mysqli_query($con,$insert);
if($result){
  echo "<h1>succesfully inserted the field into the database</h1>";
}else{
   echo "not inserted";
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
<form action ="checking the form.php"method="post">
Enter the username<br><input type ="text" name="name"placeholder="ENTER THE FIRST NAME"><br>
Enter the password<br><input type ="password" name="password"placeholder="ENTER THE PASSWORD"><br>
<input type="submit" name="check">
</form>
</body>
</html>
