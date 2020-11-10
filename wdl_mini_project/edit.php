<?php
require "connection.php";
$query="UPDATE books
set bname='".$_POST['bname']."',class='".$_POST['class']."',author='".$_POST['author']."',description='".$_POST['description']."'
WHERE bid='".$_POST['bid']."'";
$result=mysqli_query($con,$query);
if($result)
{
header("location:all_books.php");
}
else{
echo "something went wrong";
}
?>