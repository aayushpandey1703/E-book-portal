<?php
require 'connection.php';
session_start();
?>
<html>
<head>
  <title>All Books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
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


    .product-filter {
  margin: 25px;
}
.product-filter h1 {
  flex-grow: 1;
}
.sort {
  display: flex;
}
.collection-sort {
  text-decoration: none;
border: none;
  display: flex;
  flex-direction: column;
}

.products {
  display: flex;
  flex-wrap: wrap;
}

.product-card {
  padding: 2%;
  flex-grow: 1;
  flex-basis: 16%;

  display: flex; /* so child elements can use flexbox stuff too! */
}
.product-image img {
  max-width: 100%;
}
.product-info {
  margin-top: auto;
}
@media (max-width: 920px) {
  .product-card {
    flex: 1 21%;
  }
}
@media (max-width: 600px) {
  .product-card {
    flex: 1 46%;
  }
}
@media (max-width: 480px) {
  .product-filter {
    flex-direction: column;
  }
  .sort {
    align-self: flex-start;
  }
}


  </style>
      <link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
     if(isset($_SESSION['id']))
        {
        $query2="select*from login where id='".$_SESSION['id']."'";
        $result2=  mysqli_query($con, $query2);
        $account=mysqli_fetch_assoc($result2);
        }
    ?>
 
      <div class="container">
<div class="navbar">
          <div class="logo">
            <a href="index.html"><img src="images/lg2.png" width="150px" style="margin-top:-15%;" /> </a>
          </div>
          <nav>
            <ul>
              <li>
                <a href="Home.php">Home</a>
              </li>
              
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
          <div class="input-group mb-3" style="margin-top: 10%; width: 50%;margin-left: 25%;">
  <input type="text" style="border-color: black; border-radius: 15px;" class="form-control" id="bname" placeholder="Search Book by name..." aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
  </div>
</div>
    
          <input type="hidden" id="class" value="<?php echo $_POST['class']; ?>" />
<div class="row" id="book" style="margin-top: 10%;">
    <?php 
    $query="select*from books where class='".$_POST['class']."'";
    $result=mysqli_query($con,$query);
    while($book=mysqli_fetch_assoc($result))
    {
    $rate=(int)$book['rate'];
    ?>
    <div class="col-4">
          <img
            src="images/<?php echo $book['image'] ?>"
            alt=""
          />
          <h4><?php echo $book['bname'] ?></h4>
          <div class="rating">
              <?php for($i=0;$i<$rate;$i++)
              {
              ?>
               <i class="fa fa-star"></i>
              <?php
              }
              ?>
           </div>
          <div class="butn">
              <form action="description.php" method="post">
                  <input type="hidden" name="bid" value="<?php echo $book['bid']; ?>">
                            <button type="submit" name="view">
                                View more <i class="fa fa-book" aria-hidden="true"></i>
                            </button>
                              <button style="width: 40%;height: 42px;margin-left: 10%;"><a href="pdf/<?php echo $book['link']; ?>">
                                    Download </a><i class="fa fa-cloud-download" aria-hidden="true"></i>
                            </button>
                                </form>
          </div>
        </div>
    <?php
    }
    ?>
        
    </div>
      
    <script>
        $(document).ready(function () {
            $('#bname').keyup(function (e) {
                var d = $('#bname').val();
                var clas = $('#class').val();
                if (d != '') {
                    $.ajax({
                        url: 'search.php',
                        type: 'post',
                        data: {
                            'd': d,
                            'clas':clas



                        },
                        dataType: 'text',
                        success: function (result) {
                            $('#book').html(result);
                        }
                    });
                }
                else {
                    $.ajax({
                        url: 'search.php',
                        type: 'post',
                        data: {
                            'd': d,
                            'clas': clas

                        },
                        dataType: 'text',
                        success: function (result) {
                            $('#book').html(result);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
