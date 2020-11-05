<?php
require 'connection.php';
$query = "select * from books where bname like '%" . $_POST['d'] . "%'";
$result = mysqli_query($con, $query);
?>
<?php
if (mysqli_num_rows($result)) {
    while ($product = mysqli_fetch_assoc($result)) {
        $rate=(int)$product['rate'];
        ?>

        <tr>
            <td><?php echo $product['bid']; ?></td>
            
            <td id='name'><?php echo $product['bname']; ?></td>
            <td><?php echo $product['class']; ?></td>
            <td><?php echo $product['author']; ?></td>
            <td>
                <?php 
                for($i=0;$i<$rate;$i++)
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
                <form action="add.php" method="post">
                    <input type="hidden" name="bid" value="<?php echo $product['bid']; ?>" />
                    <button type="submit" name="edit">Edit</button>
                </form>
            </td>
        </tr>
        <?php
    }
} else {
    ?>
        <h7>NO BOOK FOUND</h7>
    <?php
}
?>

<?php
?>