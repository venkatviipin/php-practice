<!DOCTYPE html
<html lang="en">
<head>
<meta 
charset="UTF-8">
<title>first start</title>
</head>
<body>
<?php
$number=10;
function custom($one,$two){
//access global variable from inside the function
global $number;
$str="2";
$sum=$one+$two;
$sub=$sum-$number;
$result=$sub*$str;
//loosly typed lanuguage
return $result;
} 
//to stored the return statement
$resultt=custom(30,40);
echo $resultt;
?>
</body>
</html>
