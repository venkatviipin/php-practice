<?php
if(isset($_POST['check'])){
//connect the data base to mysql
$con=mysqli_connect('localhost','root','','login');
if($con){
echo "data base connected"."<br>";
}else {
echo "data base not connected";
}
//insert the data from client to database
$insert="SELECT * FROM user";
$result=mysqli_query($con,$insert);
while($readd=mysqli_fetch_row($result)){
?>
    <pre>
    <?php
    print_r($readd);
    ?>
    </pre>
    <?php
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
<form action ="read the data values.php"method="post">
<h1>click the below button to check the user table details </h1>
<input type="submit" value="click"name="check">
</form>
</body>
</html>
