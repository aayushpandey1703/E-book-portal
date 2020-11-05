<?php
require 'connection.php';
if(isset($_POST['register']))
{
  $query2="select*from otp where email='".$_POST['email']."'";
  $result2= mysqli_query($con, $query2);
  $otp=  mysqli_fetch_assoc($result2);
  $otp2=(int)$otp['otp'];
  $otp3=(int)$_POST['otp'];
  if($otp2==$otp3)
  {
$id=  rand(100, 999);

$query="insert into login values('$id','".$_POST['name']."','".$_POST['password']."','customer')";
$query2="insert into member values('$id','".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."')";
$result=  mysqli_query($con, $query);
$result2=  mysqli_query($con, $query2);
if($result)
{
    
   header("location:login.php?action=action");
}
else{
    echo 'somthing went wrong';
}

  }
 else {
      header("location:Home.php");
  }
}
else{
    session_start();
    $query="select*from login where uname='".$_POST['name']."' and pass='".$_POST['password']."'";
    $result=  mysqli_query($con, $query);
    $data=  mysqli_fetch_assoc($result);
    if($result)
    {
    if($data['role']=='customer')
    {
        $_SESSION['id']=$data['id'];
        header("location:Home.php");
    }
    else{
        $_SESSION['id']=$data['id'];
        header("location:dashboard.php");
    }
}
else{
    echo 'something went wrong';
}
}


?>