<?php
require 'connection.php';


$query="insert into review(mid,bid,rate,description,date) values('".$_POST['id']."','".$_POST['bid']."','".$_POST['rate']."','".$_POST['description']."',now())";
$result=mysqli_query($con,$query);
$rate=(int)$_POST['rate'];
$query2="select rate from books where bid='".$_POST['bid']."'";
$result2=mysqli_query($con,$query2);
$set=mysqli_fetch_assoc($result2);
$rate2=(int)$set['rate'];
$avg_rate=ceil(($rate+$rate2)/2);
$query2="update books set rate='$avg_rate' where bid='".$_POST['bid']."'";
$result2=mysqli_query($con,$query2);
if($result)
{
 $query="select member.name, review.rate, review.description,review.date from review 
inner join member on member.mid=review.mid
WHERE review.bid='".$_POST['bid']."' order by date desc";
$result=mysqli_query($con,$query);
if($result)
{
if(mysqli_num_rows($result)>0)
{
while($data=mysqli_fetch_assoc($result))
{
$rate=(int)$data['rate'];
?>
 <div class="review">
                      <img src="https://img.icons8.com/fluent/50/000000/user-male-circle.png" style="position: absolute; margin-left: -5%;margin-top: -0.5%;height: 40px"/><h5 style="font-size:20px;"><?php echo $data['name']; ?></h5>
                  
                      <div class="rating" >
                       <?php for($i=0;$i<$rate;$i++){ ?>
                        <i class="fa fa-star"></i>
                       <?php
                       }
                       ?>

                 </div> <h4 style="font-size: 15px; color: grey">Reviewed on <?php echo $data['date']; ?></h4> 
                
                 <h4 style="font-size:20px; margin-top: 10px; color: black" ><?php echo $data['description']; ?></h4>
                 </div>
<?php
}
 }
else{
echo 'no review.be first one';
}
}
else{
echo 'select failed';
}
}
else{
echo 'something went wrong';

}
?>