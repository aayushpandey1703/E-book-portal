<?php
if(!isset($_POST['logout']))
{
session_start();
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>E-Learning</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
            />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            />
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

    </style>
    <body>
        <?php
        require 'connection.php';
        if(isset($_SESSION['id']))
        {
        $query2="select*from login where id='".$_SESSION['id']."'";
        $result2=  mysqli_query($con, $query2);
        $account=mysqli_fetch_assoc($result2);
        }
        ?>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="images/lg2.png" width="200px"  />
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="">Home</a>
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
                <div class="row">
                    <div class="col-2">
                        <h1>Give Your Education<br />A New Style!</h1>
                        <p>
                            You Want Weapons?<br />
                            We Are In A Library. The Best Weapons In The World!<br />
                            ~Doctor WHO
                        </p>
                        <a href="#scroll" class="btn">Explore Now &#10141;</a>
                    </div>
                    <div class="col-2 slimg">
                        <img src="images/library.png" style="height: 500px"/>
                    </div>
                </div>
            </div>
        </div>
<!--
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img
                            src="https://rukminim1.flixcart.com/image/416/416/jkobte80/book/3/4/4/ncert-mathematics-textbook-for-class-x-original-imaefjt9zaq2bxqt.jpeg?q=70"
                            />
                    </div>
                    <div class="col-3">
                        <img
                            src="https://rukminim1.flixcart.com/image/416/416/jkobte80/book/3/4/4/ncert-mathematics-textbook-for-class-x-original-imaefjt9zaq2bxqt.jpeg?q=70"
                            />
                    </div>
                    <div class="col-3">
                        <img
                            src="https://rukminim1.flixcart.com/image/416/416/jkobte80/book/3/4/4/ncert-mathematics-textbook-for-class-x-original-imaefjt9zaq2bxqt.jpeg?q=70"
                            />
                    </div>
                </div>
            </div>
        </div>-->
        <div class="small-container" id="scroll">
            <?php
            if(isset($_SESSION['id']))
            {
                ?>
              <h2 class="title">Recommended Books</h2>
            <div class="row">
                <?php 
                $query3="select * from books inner join member_book on member_book.bid=books.bid where member_book.mid='".$_SESSION['id']."'";
                $result3=  mysqli_query($con, $query3);
                while($product3=  mysqli_fetch_assoc($result3))
                {
                    $rate3=(int)$product3['rate'];
                    ?>
                 <div class="col-4">
                        <img
                            src="images/<?php echo $product3['image']; ?>"
                            alt=""
                            />
                        <h4><?php echo $product3['bname']; ?></h4>
                        <h5><?php echo $product3['author']; ?></h5>
                        <div class="rating">
                            <?php
                            for ($i = 0; $i < $rate3; $i++) {
                                ?>
                                <i class="fa fa-star"></i>
                                <?php
                            }
                            ?>

                        </div>
                        <div class="butn">
                            <button onClick="location.href = 'demo.html'">
                                Read Now <i class="fa fa-book" aria-hidden="true"></i>
                            </button>
                            <button><a href="<?php echo $product3['link']; ?>" download>
                                    Download </a><i class="fa fa-cloud-download" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <?php
            }
           
            ?>
          
            <h2 class="title">Latest Books</h2>
            <div class="row">
                <?php
                $query2 = "select * from books where datediff(CURRENT_DATE,date) < 10 limit 4";
                $result2 = mysqli_query($con, $query2);
                while ($product2 = mysqli_fetch_assoc($result2)) {
                    $rate2 = (int) $product2['rate'];
                    ?>
                    <div class="col-4">
                        <img
                            src="images/<?php echo $product2['image']; ?>"
                            alt=""
                            />
                        <h4><?php echo $product2['bname']; ?></h4>
                        <h5><?php echo $product2['author']; ?></h5>
                        <div class="rating">
                            <?php
                            for ($i = 0; $i < $rate2; $i++) {
                                ?>
                                <i class="fa fa-star"></i>
                                <?php
                            }
                            ?>

                        </div>
                        <div class="butn">
                            <button onClick="location.href = 'demo.html'">
                                Read Now <i class="fa fa-book" aria-hidden="true"></i>
                            </button>
                            <button><a href="pdf/<?php echo $product2['link']; ?>" download>
                                    Download </a><i class="fa fa-cloud-download" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="row">
              
             
            </div>
            <h2 class="title">Class IX</h2>
            <div class="row">
                <?php
                $query = "select * from books where class='Class 9' limit 4";
                $result = mysqli_query($con, $query);
                while ($product = mysqli_fetch_assoc($result)) {
                    $rate = (int) $product['rate'];
                    ?>
                    <div class="col-4">
                        <img src="images/<?php echo $product['image']; ?>"/>
                        <h4><?php echo $product['bname']; ?></h4>
                        <h5><?php echo $product['author']; ?></h5>
                        <div class="rating">
                            <?php
                            for ($i = 0; $i < $rate; $i++) {
                                ?>
                                <i class="fa fa-star"></i>
                                <?php
                            }
                            ?>

                        </div>
                        <div class="butn">
                            <form action="description.php" method="post">
                                <input type="hidden" value="<?php echo $product['bid']; ?>">
                                <input type="hidden" value="<?php echo $product['image']; ?>">
                                <input type="hidden" value="<?php echo $product['bname']; ?>">
                                <input type="hidden" value="<?php echo $product['class']; ?>">
                                <input type="hidden" value="<?php echo $product['author']; ?>">
                                <input type="hidden" value="<?php echo $product['rate']; ?>">
                                <input type="hidden" value="<?php echo $product['link']; ?>">
                                <input type="hidden" value="<?php echo $product['description']; ?>">
                                <input type="hidden" value="<?php echo $product['date']; ?>">
                                
                                <button type="submit" style="outline: none;">
                                Read Now <i class="fa fa-book" aria-hidden="true"></i>
                            </button>
                                <a href="pdf/<?php echo $product['link']; ?>" download> <button type="button" style="outline: none;">
                                Download<i class="fa fa-cloud-download" aria-hidden="true"></i>
                                    </button></a>
                            </form>
                           
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div><form action="" method="post"><button class="btn">View All &#10141;</button></form></div>
            </div>
            <h2 class="title">Class X</h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/gg.jpeg" alt="" />
                    <h4>Ncert Science Class IX</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jkobte80/book/3/4/4/ncert-mathematics-textbook-for-class-x-original-imaefjt9zaq2bxqt.jpeg?q=70"
                        alt=""
                        />
                    <h4>Mathematics Textbook</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jawthu80/book/0/9/5/olympiad-excellence-guide-mathematics-class-10-original-imafydtbqkbagy8z.jpeg?q=70"
                        alt=""
                        />
                    <h4>Olympiad Excellence Guide</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jawthu80/book/0/9/7/olympiad-excellence-guide-science-iit-basics-class-10-original-imafydtcnppeuj9k.jpeg?q=70"
                        alt=""
                        />
                    <h4>Olympiad Excellence Guide</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div><button class="btn">View All &#10141;</button></div>
            </div>
            <h2 class="title">Class XI</h2>
            <div class="row">

                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jkobte80/book/3/4/4/ncert-mathematics-textbook-for-class-x-original-imaefjt9zaq2bxqt.jpeg?q=70"
                        alt=""
                        />
                    <h4>Mathematics Textbook</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jawthu80/book/0/9/5/olympiad-excellence-guide-mathematics-class-10-original-imafydtbqkbagy8z.jpeg?q=70"
                        alt=""
                        />
                    <h4>Olympiad Excellence Guide</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jawthu80/book/0/9/7/olympiad-excellence-guide-science-iit-basics-class-10-original-imafydtcnppeuj9k.jpeg?q=70"
                        alt=""
                        />
                    <h4>Olympiad Excellence Guide</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div><button class="btn">View All &#10141;</button></div>
            </div>
            <h2 class="title">Class XII</h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/gg.jpeg" alt="" />
                    <h4>Ncert Science Class IX</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jkobte80/book/3/4/4/ncert-mathematics-textbook-for-class-x-original-imaefjt9zaq2bxqt.jpeg?q=70"
                        alt=""
                        />
                    <h4>Mathematics Textbook</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jawthu80/book/0/9/5/olympiad-excellence-guide-mathematics-class-10-original-imafydtbqkbagy8z.jpeg?q=70"
                        alt=""
                        />
                    <h4>Olympiad Excellence Guide</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-4">
                    <img
                        src="https://rukminim1.flixcart.com/image/416/416/jawthu80/book/0/9/7/olympiad-excellence-guide-science-iit-basics-class-10-original-imafydtcnppeuj9k.jpeg?q=70"
                        alt=""
                        />
                    <h4>Olympiad Excellence Guide</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <div class="butn">
                        <button>
                            Read Now <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                        <button>
                            Download <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div><button class="btn">View All &#10141;</button></div>
            </div>
        </div>
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/I/51v2tZz6a8L._SX385_BO1,204,203,200_.jpg"
                            class="offer-img"
                            />
                    </div>
                    <div class="col-2">
                        <p>Exclusively Available on Stellar Minds</p>
                        <h1>Wiley's 18 Years' Solved JEE Advanced Papers</h1>
                        <small>
                            The book is aimed to meet the needs of the JEE aspirants for an
                            essential step in their preparation for JEE examination, that is,
                            solving and practicing previous years’ Examination Papers. The
                            book comprises solved papers for JEE Advanced (earlier called IIT
                            JEE) for the years 2002–2019.
                        </small>
                        <a href="" class="btn">Read Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial">
            <div class="small-container">
                <h2 class="title">Reader's Reviews</h2>

                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit
                            aliquam tenetur similique distinctio rerum dolores temporibus
                            nesciunt illo eos facilis? Expedita, nemo ullam? Quod quibusdam
                            blanditiis, aspernatur corporis sed tempore?
                        </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/user-1.png" />
                        <h3>Melissa Singh</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit
                            aliquam tenetur similique distinctio rerum dolores temporibus
                            nesciunt illo eos facilis? Expedita, nemo ullam? Quod quibusdam
                            blanditiis, aspernatur corporis sed tempore?
                        </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/user-2.png" />
                        <h3>Vicky Kaushal</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit
                            aliquam tenetur similique distinctio rerum dolores temporibus
                            nesciunt illo eos facilis? Expedita, nemo ullam? Quod quibusdam
                            blanditiis, aspernatur corporis sed tempore?
                        </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/user-3.png" />
                        <h3>Trisha Chaudhary</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="brands">
            <div class="small-container">
                <h2 class="title">Our Brand Partners</h2>

                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-wiley.png" />
                    </div>
                    <div class="col-5">
                        <img src="images/arihant-logo.png" />
                    </div>
                    <div class="col-5">
                        <img src="images/mcgraw-logo.png" />
                    </div>
                    <div class="col-5">
                        <img src="images/ncert-logo.png" />
                    </div>
                </div>
            </div>
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
                            <li>Books</li>
                            <li>Publishers</li>
                            <li>Terms & Conditions</li>
                            <li>Policy</li>
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
    </body>
</html>