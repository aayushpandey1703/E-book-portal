<?php
require 'connection.php';
session_start();
$_SESSION['dash']="admin";
$query4="SELECT class,COUNT(*) as number FROM books
GROUP BY class";
$result4=  mysqli_query($con, $query4);
$query5="select count(*) as number from books";
$result5=  mysqli_query($con, $query5);
$query6="select count(*) as number from member";
$result6=  mysqli_query($con, $query6);
$query7="select count(*) as number from admin";
$result7=  mysqli_query($con, $query7);
$data2=  mysqli_fetch_assoc($result5);
$data3=  mysqli_fetch_assoc($result6);
$data4=  mysqli_fetch_assoc($result7);
$data='';
if($result4)
{
    while($row=  mysqli_fetch_assoc($result4))
    {
        $data .="{class:'".$row['class']."',books:".$row['number']."},";
    }
   
}
else{
    echo "something went wrong";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
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
 
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    </head>
    <style>
        
        .data{
            margin-top: 10px;
        }
        .data .number_member{
            float: right;
            margin-right: 35%;
            background: #ff3333;
           
            height: 100px;
            width: 350px;
            padding: 10px;
            color: white;
            border-radius: 10px;
        }
        .data .number_admin{
            float: right;
            margin-top: -8%;
            background:#FF8000;
           
            height: 100px;
            width: 350px;
            padding: 10px;
            color: white;
            border-radius: 10px;
        }
        .data .number_book{
            background: #33cc00;
            width: 350px;
            height: 100px;
            border-radius: 10px;
            padding: 10px;
            color: white;
        }
        #chart{
            margin-top: 100px;
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
                                <a class="nav-link active" href="#">
                                    <img src="https://img.icons8.com/fluent-systems-filled/24/000000/home.png" style="height: 20px"/> <span data-feather="home"> Dashboard </span>
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all_books.php">
                                    <img src="https://img.icons8.com/material/64/000000/books--v1.png" style="height: 20px"/><span data-feather="file">  All Books</span>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all_books.php">
                                    <img src="https://img.icons8.com/ios-filled/50/000000/user-typing-using-typewriter.png" style="height: 20px;"/>  <span >Authors</span>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all_books.php">
                                    <img src="https://img.icons8.com/ios-glyphs/30/000000/poll-topic.png" style="height:20px    "/> <span data-feather="users"> Popular Books</span>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all_books.php">
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
                                    <a class="nav-link" href="add.php">
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
                        <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <form action="add.php" method="post">

                                    <button type="submit" class="btn btn-sm btn-outline-secondary" style=" box-shadow: 0px 0px 3px;color: black;"  >Add Book</button>
                                </form>
                                <form action="all_books.php" method="post">

                                      <button type="submit" class="btn btn-sm btn-outline-secondary" style=" box-shadow: 0px 0px 3px;color: black;">All Books</button>
                                </form>
                                
                            </div>

                        </div>
                    </div>
                    
                     <div class="data" >
                         <p> 
                         <div class="number_member">
                             <img src="https://img.icons8.com/ios-filled/50/000000/group-background-selected.png" style="position: absolute; height: 70px;"/><h5 style="margin-left: 25%">Total number of member</h5>
                             <h4 style="margin-left: 26%;"><?php echo $data3['number']; ?></h4>
                     </div>
                         <div class="number_book">
                             <img src="https://img.icons8.com/ios-filled/50/000000/read.png" style="position: absolute; height: 70px;"/><h5 style="margin-left: 26%">Total number of books</h5>
                             <h4 style="margin-left: 27%;"><?php echo $data2['number']; ?></h4>
                         </div>
                             <div class="number_admin">
                             <img src="https://img.icons8.com/ios-glyphs/50/000000/admin-settings-male.png" style="position: absolute; height: 70px;"/><h5 style="margin-left: 26%">Total number of Admins</h5>
                             <h4 style="margin-left: 27%;"><?php echo $data4['number']; ?></h4>
                         </div>
                     </p>
                     </div>
                     
                     <div id="chart">
                         
                     </div>
                     <script>
                           new Morris.Bar({
  element: 'chart',
 
  data: [<?php echo $data; ?>],
  xkey: 'class',
  ykeys: ['books'],
  labels: ['books'],
          stacked: true
});
                         </script>
    </body>
</html>
