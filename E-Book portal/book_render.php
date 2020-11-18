<?php
require 'connection.php';
$query="select*from books where bname like '".$_POST['d']."%'" ;
$result=  mysqli_query($con, $query);
if($result)
{
    while($product=  mysqli_fetch_assoc($result))
    {
        ?>
<tr><td><?php echo $product['bname']; ?></td></tr>
<?php
    }
}
?>