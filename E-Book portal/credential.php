<?php

require 'connection.php';
if(isset($_POST['register']))
{
session_start();
  $query2="select*from otp where email='".$_POST['email']."'";
  $result2= mysqli_query($con, $query2);
  $otp=  mysqli_fetch_assoc($result2);
  $otp2=(int)$otp['otp'];
  $otp3=(int)$_POST['otp'];
  if($otp2==$otp3)
  {
$id=  rand(100, 999);
if(isset($_SESSION['dash']))
{
$query="insert into login values('$id','".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','admin')";
$query2="insert into admin values('$id','".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."')";
}
else{
$query="insert into login values('$id','".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','customer')";
$query2="insert into member values('$id','".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."')";
}
$result=  mysqli_query($con, $query);
$result2=  mysqli_query($con, $query2);
if($result)
{
    session_destroy();
    $sql="delete from otp where email='".$_POST['email']."'";
    $result=mysqli_query($con,$sql);
   header("location:login.php?action=action");
}
else{
    echo 'somthing went wrong';
}

  }
 else {
      header("location:add.php");
  }
}
else{
    session_start();
    $query="select*from login where email='".$_POST['name']."' and pass='".$_POST['password']."'";
    $result=  mysqli_query($con, $query);
    $data=  mysqli_fetch_assoc($result);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
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
            header("location:login.php?logged=no");
        }
}
else{
    echo 'something went wrong';
}
}


?>