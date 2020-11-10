<?php
require 'connection.php';
$query="delete from books where bid='".$_POST['bid']."'";
$result=  mysqli_query($con, $query);
if($result)
{
    header("location:all_books.php");
}
?>