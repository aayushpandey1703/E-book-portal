<?php
require 'connection.php';
session_start();
if(isset($_POST['view'])){
$_SESSION['bid']=$_POST['bid'];
$sql2="insert into member_book(mid,bid) values ('".$_SESSION['id']."','".$_SESSION['bid']."')";
$result4=mysqli_query($con,$sql2);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Book Detail</title>
        <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <!-- Latest compiled and minified CSS -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    
      


    </head>
    <style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
}
body {
  font-family: "Poppins", sans-serif;
  background: white;
}
.navbar {
  display: flex;
  align-items: center;
  padding: 20px;
}
nav {
  flex: 1;
  text-align: right;
}
nav ul {
  display: inline-block;
  list-style-type: none;
}
nav ul li {
  display: inline-block;
  margin-right: 20px;
}
a {
  text-decoration: none;
  color: rgb(54, 54, 54);
}
p {
  color: #555;
}
.container {
  max-width: 1300px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;
}
.row {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
}
.col-2 {
  flex-basis: 50%;
  min-width: 300px;
}
.col-2 img {
  max-width: 100%;
  padding: 50px 0;
}
.slimg {
  position: relative;
  animation-name: lr;
  animation-duration: 4s;
  animation-delay: 1s;
}

@keyframes lr {
  0% {
    left: 0px;
    top: 0px;
  }
  50% {
    left: 100px;
    top: 0px;
  }
  100% {
    left: 0px;
    top: 0px;
  }
}
.menu-icon {
  display: none;
}
.col-2 h1 {
  font-size: 50px;
  line-height: 60px;
  margin: 25px 0;
}
.btn {
  display: inline-block;
  background: #1d1fe3;
  color: #fff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  transition: background 0.5s;
}
.btn:hover {
  background: #0b0c60;
  cursor: pointer;
}
.download {
  display: inline-block;
  background: #19be19;
  color: #fff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  transition: background 0.5s;
}
.download:hover {
  background: #04881a;
  cursor: pointer;
}
.header {
  background: radial-gradient(#fff, #00acff);
  border-bottom-left-radius: 50% 15%;
  border-bottom-right-radius: 50% 15%;
}
.header .row {
  margin-top: 70px;
}
.categories {
  margin: 70px 0;
}
.col-3 {
  flex-basis: 30%;
  min-width: 250px;
  margin-bottom: 30px;
}
.col-3 img {
  width: 100%;
}
.small-container {
  max-width: 1080px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;
}
.col-4 {
  flex-basis: 25%;
  padding: 10px;
  min-width: 200px;
  margin-bottom: 50px;
  transition: transform 0.5s;
  box-shadow: 0 0 30px 0px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}
.col-4 img {
  width: 100%;
  height: 350px;
}
.title {
  text-align: center;
  margin: 0 auto 80px;
  position: relative;
  line-height: 60px;
  color: rgb(65, 65, 65);
}
.title::after {
  content: "";
  background: #e30958;
  width: 80px;
  height: 5px;
  border-radius: 5px;
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}
h4 {
  color: #555;
  font-weight: normal;
}
.col-4 p {
  font-size: 14px;
}
.rating .fa {
  color: #ffee00;
}
.col-4:hover {
  transform: translateY(-10px);
  cursor: pointer;
}
.butn button {
  background: transparent;
  color: black;
  border: 1px solid black;
  padding: 8px;
  margin: 10px;
  margin-left: 0;
  border-radius: 30px;
  transition: 0.5s;
}
.butn button:hover {
  color: white;
  background: #1d1fe3;
  cursor: pointer;
  border: 2px solid gray;
}
.offer {
  background: radial-gradient(#fff, #00acff);
  margin-top: 80px;
  padding: 30px 0;
}
.col-2 .offer-img {
  padding: 50px;
  height: 400px;
}
small {
  color: #555;
}

.testimonial {
  padding-top: 100px;
}
.testimonial .col-3 {
  text-align: center;
  padding: 40px 20px;
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: transform 0.5s;
}
.testimonial .col-3 img {
  width: 50px;
  margin-top: 20px;
  border-radius: 50%;
}
.testimonial .col-3:hover {
  transform: translateY(-10px);
}
.fa.fa-quote-left {
  font-size: 34px;
  color: #1d1fe3;
}
.col-3 p {
  font-size: 12px;
  margin: 12px 0;
  color: #777;
}
.testimonial .col-3 h3 {
  font-weight: 600;
  color: #555;
  font-size: 16px;
}
.brands {
  margin: 100px auto;
}
.col-5 {
  width: 160px;
}
.col-5 img {
  width: 100%;
  cursor: pointer;
  filter: grayscale(100%);
}
.col-5 img:hover {
  filter: grayscale(0);
}
.footer {
  background: rgb(6, 21, 36);
  color: #8a8a8a;
  font-size: 14px;
  padding: 60px 0 20px;
}
.footer p {
  color: #8a8a8a;
}
.footer h3 {
  color: #e2dbdb;
  margin-bottom: 20px;
}
.footer-col-1,
.footer-col-2,
.footer-col-3,
.footer-col-4 {
  min-width: 250px;
  margin-bottom: 20px;
}
.footer-col-1 {
  flex-basis: 30%;
}
.footer-col-2 {
  flex: 1;
  text-align: center;
}
.footer-col-2 img {
  width: 180px;
  margin-bottom: 20px;
}
.footer-col-3,
.footer-col-4 {
  flex-basis: 12%;
  text-align: center;
}
ul {
  list-style: none;
}
.app-logo {
  margin-top: 20px;
}
.app-logo img {
  width: 140px;
}
.footer hr {
  border: none;
  background: #b5b5b5;
  height: 1px;
  margin: 20px 0;
}
.copyright {
  text-align: center;
}
/*-----all products--------*/
.row-2 {
  justify-content: space-between;
  margin: 100px auto 50px;
}

select {
  border: 1px solid #ff523b;
  padding: 5px;
}
select:focus {
  outline: none;
}
.page-btn {
  margin: 0 auto 80px;
}
.page-btn span {
  display: inline-block;
  border: 1px solid #ff523b;
  margin-left: 10px;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  cursor: pointer;
}
.page-btn span:hover {
  background: #ff523b;
  color: #fff;
}

/*single product*/
.single-product {
  margin-top: 80px;
}
.single-product .col-2 img {
  padding: 0;
}
.single-product .col-2 {
  padding: 20px;
}

.single-product .fa {
  color: #e30958;
  margin-left: 10px;
}
/* ---cart items ---*/
.cart-page {
  margin: 80px auto;
}
table {
  width: 100%;
  border-collapse: collapse;
}
.cart-info {
  display: flex;
  flex-wrap: wrap;
}
th {
  text-align: left;
  padding: 5px;
  color: #fff;
  background: #ff523b;
  font-weight: normal;
}
td {
  padding: 10px 5px;
}
td input {
  width: 40px;
  height: 30px;
  padding: 5px;
}
td a {
  color: #ff523b;
  font-size: 12px;
}
td img {
  width: 80px;
  height: 80px;
  margin-right: 10px;
}
.total-price {
  display: flex;
  justify-content: flex-end;
}
.total-price table {
  border-top: 3px solid #ff523b;
  width: 100%;
  max-width: 400px;
}
td:last-child {
  text-align: right;
}
th:last-child {
  text-align: right;
}

/* account*/

.account-page {
  padding: 50px 0;
  background: radial-gradient(#fff, #00acff);
}
.form-container {
  background: #fff;
  width: 300px;
  height: 400px;
  position: relative;
  text-align: center;
  padding: 20px 0;
  margin: auto;
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
  overflow: hidden;
}
.form-container span {
  font-weight: bold;
  padding: 0 10px;
  color: #555;
  cursor: pointer;
  width: 100px;
  display: inline-block;
}
.form-btn {
  display: inline-block;
}
.form-container form {
  max-width: 300px;
  padding: 0 20px;
  position: absolute;
  top: 130px;
  transition: transform 1s;
}
form input {
  width: 100%;
  height: 30px;
  margin: 10px 0;
  padding: 0 10px;
  border: 1px solid #ccc;
}
form .btn {
  width: 100%;
  border: none;
  cursor: pointer;
  margin: 10px 0;
}
.btn:focus {
  outline: none;
}
#LoginForm {
  left: -300px;
}
#RegForm {
  left: 0;
}
form a {
  font-size: 12px;
}
#Indicator {
  width: 100px;
  border: none;
  background: #00acff;
  height: 3px;
  margin-top: 8px;
  transform: translateX(100px);
  transition: transform 1s;
}

        .user{
            position: absolute;
            width: 60%;
            float: right;
            margin-left: 35%;
           
            
            
           
        }
        .user .review{
            margin-left: 30%;
            margin-top: 5%;
            width: 50%;
            
        }
        .footer{
            margin-top: 600px;
        }
    </style>
    <body>
        <?php 
         $query2="select*from login where id='".$_SESSION['id']."'";
        $result2=  mysqli_query($con, $query2);
        $account=mysqli_fetch_assoc($result2);
        ?>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images/lg2.png" width="205px" />
        </div>
        <nav>
          <ul>
            <li>
              <a href="Home.php">Home</a>
            </li>
            <li><a href="">Books</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
             <?php
                            if(isset($_SESSION['id']))
                            {
                                ?>
                            <img src="https://img.icons8.com/material/40/000000/user-male-circle--v1.png" style="position:absolute; margin-top: -10px"/> <li style="margin-left:40px;"><a href="login.php"> <b><?php echo $account['uname'];  ?></b></a></li>
                            <?php
                            }
                            else{
                                ?>
                              <li><a href="login.php">Account</a></li>
                            <?php
                            
                            }
                            ?>
          </ul>
        </nav>
      
      </div>
    </div>
    <!--single book details-->
      <div class="small-container single-product">
            <?php
            require 'connection.php';
            $query3="select*from books where bid='".$_SESSION['bid']."'";
            $result3=  mysqli_query($con, $query3);
            $book=mysqli_fetch_assoc($result3);
            if($result3)
            {
                $rate=(int)$book['rate'];
                ?>
              <p>Home / Books</p>
          <h1><?php echo $book['bname'] ?></h1>
           <div class="rating">
          <?php for($i=0;$i<$rate;$i++){
              ?>
          <i class="fa fa-star"></i>
          <?php
          } ?>
           </div>
          <div class="row" style="margin-top: 50px;">
       
            <img src="images/<?php echo $book['image']; ?>" alt="" />
        </div>
           <a href="pdf/<?php echo $book['link']; ?>" download><button class="btn download" style="margin-left: 43%;">Download</button></a>    
          <div class="col-2" style="margin-left: -15%; width: 120%;" >
        
           
            <h3 style="margin-bottom: 2%;">Author: <label style="color:#333333; font-family: serif; margin-left: 1%;"><?php echo $book['author']; ?></label></h3> 
            <h3 style="margin-bottom: 2%;">Class: <label style="color:#333333; font-family: serif; margin-left: 1%;"><?php echo $book['class']; ?></label></h3> 
          <h3>Product Details<i class="fa fa-indent"></i></h3>
          <br />
          <p>
          <?php echo $book['description']; ?>
        </div>
    
                <?php
            }
            ?>
  
    </div>
        <h2 class="title" style="margin-top: 5%;">You may also like</h2>
    <div class="small-container" id="scroll" style="margin-top: 70px;">
      <div class="row">
          <?php 
          $query4="select*from books where class in (select class from books where bid='".$_SESSION['bid']."') limit 4";
          $result4=  mysqli_query($con, $query4);
          while($product=  mysqli_fetch_assoc($result4))
          {
              $rate=(int)$product['rate'];
              ?>
          <div class="col-4">
            <img
                src="images/<?php echo $product['image']; ?>"
            alt=""
          />
          <h4><?php echo $product['bname']; ?></h4>
          <div class="rating">
              <?php for($i=0;$i<$rate;$i++){ 
                  ?>
              
            <i class="fa fa-star"></i>
           
              <?php } ?>
            
          </div>
          
          <div class="butn">
              <form action="description.php" method="post">
                  <input type="hidden" name="bid" value="<?php echo $product['bid']; ?>"/>
               <button type="submit" name="view">
              View more <i class="fa fa-book" aria-hidden="true"></i>
            </button>
                  <a href="pdf/<?php echo $product['blink']; ?>"> <button>
              Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                      </button></a>
          </form>
           
          </div>
         
          </div>
          <?php
          }
          ?>
        
          
        
    </div>
    </div>
    <div  style="margin-left: 2%; margin-top: 2%; margin-bottom: 50px; width: 95%; height: 1px; background: #cccccc"></div>
      <?php
                 $sql="select*from books where bid='".$_SESSION['bid']."'";
                 $exe=mysqli_query($con,$sql);
                 $data=mysqli_fetch_assoc($exe);
                 $rate=(int)$data['rate'];
                 ?>
        <div class="avg" style="margin-left: 5%; width: 100%;">
                 <h3 style="margin-bottom:7%;font-size: 30px;font-family:serif;position:absolute">Customer Review</h3>
                 <div class="rating" style="margin-bottom: 20%;position: absolute; margin-top: 3%; ">
                     <?php for($i=0;$i<$rate;$i++)
                     {
                     ?>
                     <i class="fa fa-star" style="font-size:25px"></i>
                     <?php
                     }
                     ?>
                     <h3 style="float:right; font-family: serif; font-size: 30px; color:orange; margin-right: -15%;"><?php echo $data['rate'] ?>/5</h3>
                 </div>
        </div>
             <div class="review" id="rev"  style="position:absolute;margin-left: 7%;">

                 <?php 
                 $query2="select*from review where mid='".$_SESSION['id']."' and bid='".$_SESSION['bid']."'";
                 $result2=mysqli_query($con,$query2);
                 if(mysqli_num_rows($result2)==0){               
                 
                 ?>
               

                 <h3 style="margin-top: 40%; color: black; font-size: 20px; font-family: serif">Write a Review</h3>
                 <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id']; ?>"/>
                 <input type="hidden" name="bid" id="bid" value="<?php echo $_SESSION['bid']; ?>" />
                 <h4>   <input type="number" name="rate" id="rate" max="5" min="0" style="width: 40px; margin-top: 10px; height: 30px" value="0"/>/5</h4>
                 <textarea name="description" rows="10" cols="35" id="description" value="Write a Review" style="outline: none; margin-top: 10px; color: black; border-radius: 10px; text-align: left;border-color: black;font-family:serif; font-size: 20px;" placeholder="write a review">
               </textarea>
                 <p><button type="submit" class="btn download" name="des"  id="des" style="margin-top:4%; width: 100%; height: 30px; border: none;"/>Post my review</button></p>
             <?php
             }
             ?>
             </div>
             <div class="user" id="user">
                <?php 
                
                 $query="select member.name, review.rate, review.description,review.date from review 
inner join member on member.mid=review.mid
WHERE review.bid='".$_SESSION['bid']."' order by date desc";
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
                 ?>
                  <div class="review">             
                
                 <h4 >No reivew. Be first to review</h4>
                 </div>
                 <?php
                 }
                 
                 }else{
                 echo 'something went wrong';
                 }

                 ?>
                
             </div>
          <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-2">
            <img src="images/lg2.png" />
            <p>
              Our Purpose Is To Make Books Available To All and Benefits of
              Education Accessible To The Many
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">
          Copyright 2020 - One Media Digital Library Pvt. Ltd.
        </p>
      </div>
    </div>
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";
      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#des').click(function (e) {
                    e.preventDefault();
                    var id = $('#id').val();
                    var bid = $('#bid').val();
                    var rate = $('#rate').val();
                    var description = $('#description').val();
                   
                    $.ajax({
                        url: 'review.php',
                        type: 'post',
                        data: {
                            "id": id,
                            "bid": bid,
                            "rate": rate,
                            "description": description
                        },
                        dataType: 'text',
                        
                        success: function (result) {
                            $('#user').html(result);                                      
                        }
                    });
                    document.getElementById('rev').innerHTML = "";
                });
                
            });
           
        </script>
    </body>
</html>
