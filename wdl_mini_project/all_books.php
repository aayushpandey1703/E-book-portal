<?php
session_start();
$_SESSION['dash']="admin";
?>
<!doctype html>
<html lang="en">
<title>All Books</title>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Dashboard Template · Bootstrap</title>

    </head>
    <style>
        .highlight
        {
            background-color: yellow;
        }

        span:hover{
            border-bottom: 4px solid #00ffff;

        }
        nav{
            height: 70px;
        }
        #sidebarMenu{
            height: 800px;
        }
        .add{
            padding: 50px;
        }
        label{
            font-family: sans-serif;
            margin-bottom:-20px;
            margin-top: 20px;
            font-size: 18px;
        }
        #data{
            margin-top: -10px;
            border: 2px solid #cccccc;
            width: 30%;
            height: 40px;
            border-radius: 9px;
            outline: none;
            transition: .25s
        }
        #data:hover{
            box-shadow: 2px 1px 1px 1px cadetblue;
        }

        textArea{
            margin-top: -10px;
            border: 2px solid #cccccc;
            border-radius: 9px;
            outline: none;
            transition: 0.5s;
        }
        textArea:hover{
            box-shadow: 0 10px 10px;
        }
        #general{
            margin-left: 80%;
        }
        table{
            width: 100%;
            margin-top: 10%;
            text-align: center;
            border: none;   
        }
        th{
            background: #333333;
            color: white;
            height: 40px;
        }
        tr{
            height: 40px;
        }
        tr:nth-child(odd){
            background: #cccccc;
        }
        #genaral #class{
            margin-top: -10%;
            
        }
        h7{
            float: left;
            margin-bottom: -1.5%;
        }

    </style>
    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="height: 90px;">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Stellar Minds</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form action="search_book.php" method="post" style="width: 100%; ">
                <input  type="text" placeholder="Search...." aria-label="Search" id="bname" style="background:whitesmoke ;width:90%; height: 44px;outline: none;" autocomplete="off">
                <button type="submit" class="btn btn-secondary" style="height: 43px; margin-top: -5px; margin-left: -5px" id="search" ><img src="https://img.icons8.com/ios-glyphs/30/000000/search.png" style="height: 20px"/></button>
            <div id="suggestion"style="background: red; position: absolute; width: 68%; margin-left: 3px;">
                   
                </div>
            </form>
            <img src="https://img.icons8.com/ios-glyphs/30/000000/logout-rounded.png" style="height: 20px; "/><ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <form action="Home.php" method="post">
                        <input type="submit" name="logout" value="sign out" style="background: none; border: none; color: white; outline:none"/>
                    </form>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="height: 1300px;">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboard.php">
                                    <img src="https://img.icons8.com/fluent-systems-filled/24/000000/home.png" style="height: 20px"/> <span data-feather="home">Dashboard </span>
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="https://img.icons8.com/material/64/000000/books--v1.png" style="height: 20px"/><span data-feather="file">  All Books</span>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/user-typing-using-typewriter.png" style="height: 20px;"/>  <span >Authors</span>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="https://img.icons8.com/ios-glyphs/30/000000/poll-topic.png" style="height:20px    "/> <span data-feather="users"> Popular Books</span>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="https://img.icons8.com/ios-glyphs/30/000000/time-machine--v1.png" style="height:20px;"/><span data-feather="bar-chart-2">  Recent </span>

                                </a>
                            </li>

                        </ul>

                        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted" style="margin-left:-15px">
                            Operation
                            <span></span>
                            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                            </h6>
                            <ul class="nav flex-column mb-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <img src="https://img.icons8.com/ios-glyphs/30/000000/add-book.png" style="height: 20px; margin-right: 10px;"/>  <span data-feather="file-text"> Add Book</span>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">
                                        <img src="https://img.icons8.com/metro/26/000000/add-user-male.png" style="height: 20px; margin-right: 10px;"/><span data-feather="file-text">Add Admin</span>

                                    </a>
                                </li>
                            </ul>
                    </div>
                </nav>
                 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" >
                        <h1 class="h2">All Books</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <form action="add.php" method="post">

                                    <button type="submit" class="btn btn-sm btn-outline-secondary" style=" box-shadow: 0px 0px 3px;color: black;"  >Add Book</button>
                                </form>
                                    <button type="submit" class="btn btn-sm btn-outline-secondary" disabled style="background-color: #333333; border-radius: 2px; box-shadow: 0px 1px 10px;color: white;">All Books</button>
                                
                            </div>

                        </div>
                    </div>
                    
                     <?php
                     require 'connection.php';
                     $query="SELECT books.bid, books.bname, books.image, books.author, books.class, books.rate, books.date, admin.name from books
INNER JOIN admin_book on admin_book.bid=books.bid
INNER join admin on admin_book.aid=admin.aid";
                     $query2="select count(*) as number from books";
                     $result=  mysqli_query($con, $query);
                     $result2=  mysqli_query($con, $query2);
                     $count=  mysqli_fetch_assoc($result2);
                     ?>
                     <div class="filter">
                     <h7 style="color: #999999;" id='h7'>Total <?php echo $count['number']; ?>  books found</h7>
                     <select name="general" id="general">
                         <option hidden value="*">--sort by--</option>
                         <option value="date">Newly Added</option>
                         <option value="rate">Most Popular</option>
                     </select>
                     <select name="class" id="class">
                         <option value="*" hidden>--sort by--</option>
                         <option value="class 9">Class 9</option>
                         <option value="class 10">Class 10</option>
                          <option value="class 11">Class 11</option>
                           <option value="class 12">Class 12</option>
                     </select>
                     </div>
                     <table border="3">
                         <tr>
                             <th>Book ID</th>
                             <th>Admin</th>
                             <th>Title of Book</th>
                             <th>Class</th>
                             <th>Name of Author</th>
                             <th>Rating</th>
                             <th>Date when added</th>
                             <th>delete</th>
                             <th>edit</th>
                             
                         </tr>
                         <tbody id="book">
                             <?php
                             while($product=  mysqli_fetch_assoc($result))
                             {
                                 $rate=(int)$product['rate'];
                                 ?>
                             <tr>
                                 <td><?php echo $product['bid']; ?></td>
                                 <td><?php echo $product['name']; ?></td>
                                 <td id="name"><?php echo $product['bname']; ?></td>
                                 <td><?php echo $product['class']; ?></td>
                                 <td><?php echo $product['author']; ?></td>
                                 <td>
                                     <div class="rating">
                                     <?php 
                                     for($i=0;$i<$rate;$i++)
                                     {
                                         ?>
                                         <i class="fa fa-star"></i>
                                         <?php
                                     }
                                     ?>
                                     </div>
                                 </td>
                                 <td><?php echo $product['date']; ?></td>
                                 <td>
                                     <form action="delete.php" method="post">
                                         <input type="hidden" name="bid" value="<?php echo $product['bid']; ?>" />
                                         <button type="submit" name="delete" style="border: none;background: none;outline:none"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="32" height="32"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#fa1d07"><path d="M75.25,21.5c-6.22962,0 -10.75,4.52038 -10.75,10.75v5.375h-32.25v10.75h5.375v86c0,8.89025 7.23475,16.125 16.125,16.125h52.52173l10.75,-10.75h-63.27173c-2.96162,0 -5.375,-2.408 -5.375,-5.375v-86h75.25v51.98633l10.75,10.75v-62.73633h5.375v-10.75h-32.25v-5.375c0,-6.22962 -4.52038,-10.75 -10.75,-10.75zM75.25,32.25h21.5v5.375h-21.5zM59.125,64.5v59.125h10.75v-59.125zM80.625,64.5v59.125h10.75v-59.125zM102.125,64.5v40.16553l10.75,-10.75v-29.41553zM115.0271,106.9646l-7.5271,7.5271l24.99585,24.98535l-24.99585,24.99585l7.5271,7.5271l24.99585,-24.99585l24.44995,24.46045l7.5271,-7.5271l-24.46045,-24.46045l24.46045,-24.44995l-7.5271,-7.5271l-24.44995,24.46045z"></path></g></g></svg></button>
                                     </form>
                                 </td>
                                 <td>
                                      <form action="add.php" method="post">
                                         <input type="hidden" name="bid" value="<?php echo $product['bid']; ?>" />
                                         <button type="submit" name="edit" style="background:none;border:none;outline:none;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="32" height="32"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#17e013"><path d="M128.49609,21.33203c-5.62695,0 -11.25391,2.18359 -15.62109,6.55078l-84.99219,84.99219l-0.33594,1.67969l-5.87891,29.5625l-1.67969,7.89453l7.89453,-1.67969l29.5625,-5.87891l1.67969,-0.33594l84.99219,-84.99219c8.73438,-8.73437 8.73438,-22.50781 0,-31.24219c-4.36719,-4.36719 -9.99414,-6.55078 -15.62109,-6.55078zM128.49609,31.57813c2.70849,0 5.43799,1.23877 8.0625,3.86328c5.22803,5.22803 5.22803,10.89697 0,16.125l-3.86328,3.69531l-15.95703,-15.95703l3.69531,-3.86328c2.62451,-2.62451 5.35401,-3.86328 8.0625,-3.86328zM109.17969,46.86328l15.95703,15.95703l-65.00391,65.00391c-3.52734,-6.88672 -9.07031,-12.42969 -15.95703,-15.95703zM37.28906,120.60156c6.4458,2.60352 11.50586,7.66357 14.10938,14.10938l-17.63672,3.52734z"></path></g></g></svg></button>
                                     </form>
                                 </td>
                             </tr>
                           
                             <?php
                             }
                             ?>
                         </tbody>
                     </table>
                     <script type="text/javascript">
                         $(document).ready(function(){
                            $("#general").change(function(event){
                               event.preventDefault();
                               var d=$("#general").val();
                               var clas=$("#class").val();
                                $.ajax({
                                  url:"filter.php",
                                  type:"post",
                                  data:{
                                   "d":d,
                                   "clas":clas
                                  },
                                  dataType:"text",
                                  success:function(result){
                                      $("#book").html(result);
                                  }
                               });
                            });
                            
                         });
                          $(document).ready(function(){
                            $("#class").change(function(event){
                               event.preventDefault();
                               var d=$("#general").val();
                               var clas=$("#class").val();
                                $.ajax({
                                  url:"filter.php",
                                  type:"post",
                                  data:{
                                   "d":d,
                                   "clas":clas
                                  },
                                  dataType:"text",
                                  success:function(result){
                                      $("#book").html(result);
                                  }
                               });
                            });
                            
                         });
                         $(document).ready(function(){
                             $("#bname").keyup(function(){
                               
                              var d1 = $("#bname").val();
                              
                              if(d1 !== '')
                              {
                              $.ajax({
                                 url: "search.php",
                                 
                                 type: "post",
                                 data:{
                                     "d1": d1
                                 },
                                 dataType:"text",
                               
                                 success:function(result){
                                     $("#book").html(result);
                                    
                                 }
                              });
                          }
                          else{
                               $.ajax({
                                 url: "search.php",
                                 type: "post",
                                 data:{
                                     "d1": d1
                                 },
                                 dataType:"text",
                                 success:function(result){
                                     $("#book").html(result);
                                 }
                              });
                          }
                             });
                            
                         });
                       
                         </script>
                    </body>
                    </html>