<?php
session_start();
$target=$_FILES['blink']['name'];
$target2=$_FILES['image']['name'];
require 'connection.php';
$blink=$_FILES['blink']['name'];
$image=$_FILES['image']['name'];
$query="insert into books(bid,image,bname,class,author,link,description,date) values('".$_POST['bid']."','$image','".$_POST['bname']."','".$_POST['class']."','".$_POST['author']."','$blink','".$_POST['description']."',current_date)";
$query2="insert into admin_book values('".$_SESSION['id']."','".$_POST['bid']."')";
$result=  mysqli_query($con, $query);
$result2=  mysqli_query($con, $query2);
if(move_uploaded_file($_FILES['image']['tmp_name'],"images/".$target2) && move_uploaded_file($_FILES['blink']['tmp_name'],"pdf/".$target))
{
    ?>
<script>
    alert("Book added successfully");
    
</script>
<?php
header("location:add.php");
}
else{
    echo 'something went wrong';
}
?>