<?php
require 'connection.php';
if(!strcmp($_POST['clas'], "*")){
  
$query="SELECT books.bid, books.bname, books.image, books.author, books.class, books.rate, books.date, admin.name from books
INNER JOIN admin_book on admin_book.bid=books.bid
INNER join admin on admin_book.aid=admin.aid
order by ".$_POST['d']." DESC";
$result=  mysqli_query($con, $query);
}
else if(!strcmp($_POST['d'], "*"))
{
    $query="SELECT books.bid, books.bname, books.image, books.author, books.class, books.rate, books.date, admin.name from books
INNER JOIN admin_book on admin_book.bid=books.bid
INNER join admin on admin_book.aid=admin.aid
 where class='".$_POST['clas']."'";
$result=  mysqli_query($con, $query);
}
else{
   
    $query="SELECT books.bid, books.bname, books.image, books.author, books.class, books.rate, books.date, admin.name from books
INNER JOIN admin_book on admin_book.bid=books.bid
INNER join admin on admin_book.aid=admin.aid
 where class='".$_POST['clas']."' order by ".$_POST['d']." DESC";
    $result=  mysqli_query($con, $query);
}
while($product=  mysqli_fetch_assoc($result))
{
    $rate=(int)$product['rate'];
   
    ?>
<tr>
    <td><?php echo $product['bid']; ?></td>
     <td><?php echo $product['name']; ?></td>
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
 <button type="submit" name="delete" style="border: none;background: none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="32" height="32"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#fa1d07"><path d="M75.25,21.5c-6.22962,0 -10.75,4.52038 -10.75,10.75v5.375h-32.25v10.75h5.375v86c0,8.89025 7.23475,16.125 16.125,16.125h52.52173l10.75,-10.75h-63.27173c-2.96162,0 -5.375,-2.408 -5.375,-5.375v-86h75.25v51.98633l10.75,10.75v-62.73633h5.375v-10.75h-32.25v-5.375c0,-6.22962 -4.52038,-10.75 -10.75,-10.75zM75.25,32.25h21.5v5.375h-21.5zM59.125,64.5v59.125h10.75v-59.125zM80.625,64.5v59.125h10.75v-59.125zM102.125,64.5v40.16553l10.75,-10.75v-29.41553zM115.0271,106.9646l-7.5271,7.5271l24.99585,24.98535l-24.99585,24.99585l7.5271,7.5271l24.99585,-24.99585l24.44995,24.46045l7.5271,-7.5271l-24.46045,-24.46045l24.46045,-24.44995l-7.5271,-7.5271l-24.44995,24.46045z"></path></g></g></svg></button>                </form>
            </td>
            <td>
                <form action="add.php" method="post">
                    <input type="hidden" name="bid" value="<?php echo $product['bid']; ?>" />
 <button type="submit" name="edit" style="background:none;border:none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="32" height="32"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#17e013"><path d="M128.49609,21.33203c-5.62695,0 -11.25391,2.18359 -15.62109,6.55078l-84.99219,84.99219l-0.33594,1.67969l-5.87891,29.5625l-1.67969,7.89453l7.89453,-1.67969l29.5625,-5.87891l1.67969,-0.33594l84.99219,-84.99219c8.73438,-8.73437 8.73438,-22.50781 0,-31.24219c-4.36719,-4.36719 -9.99414,-6.55078 -15.62109,-6.55078zM128.49609,31.57813c2.70849,0 5.43799,1.23877 8.0625,3.86328c5.22803,5.22803 5.22803,10.89697 0,16.125l-3.86328,3.69531l-15.95703,-15.95703l3.69531,-3.86328c2.62451,-2.62451 5.35401,-3.86328 8.0625,-3.86328zM109.17969,46.86328l15.95703,15.95703l-65.00391,65.00391c-3.52734,-6.88672 -9.07031,-12.42969 -15.95703,-15.95703zM37.28906,120.60156c6.4458,2.60352 11.50586,7.66357 14.10938,14.10938l-17.63672,3.52734z"></path></g></g></svg></button>                </form>
            </td>
</tr>
<?php
}
?>