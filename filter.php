<?php
require 'connection.php';
if(!strcmp($_POST['clas'], "*")){
  
$query="select * from books order by ".$_POST['d']." DESC";
$result=  mysqli_query($con, $query);
}
else if(!strcmp($_POST['d'], "*"))
{
    $query="select * from books where class='".$_POST['clas']."'";
$result=  mysqli_query($con, $query);
}
else{
   
    $query="select * from books where class='".$_POST['clas']."' order by ".$_POST['d']." DESC";
    $result=  mysqli_query($con, $query);
}
while($product=  mysqli_fetch_assoc($result))
{
    $rate=(int)$product['rate'];
   
    ?>
<tr>
    <td><?php echo $product['bid']; ?></td>
    <td><?php echo $product['bname']; ?></td>
    <td><?php echo $product['class']; ?></td>
    <td><?php echo $product['author']; ?></td>
    <td>
       <?php for($i=0;$i<$rate;$i++)
       {
           ?>
        <i class="fa fa-star"></i>
        <?php
       }
       ?>
    </td>
    <td><?php echo $product['date']; ?></td>
     <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="bid" value="<?php echo $product['bid']; ?>" />
                    <button type="submit" name="delete">delete</button>
                </form>
            </td>
            <td>
                <form action="edit.php" method="post">
                    <input type="hidden" name="bid" value="<?php echo $product['bid']; ?>" />
                    <button type="submit" name="edit">Edit</button>
                </form>
            </td>
</tr>
<?php
}
?>