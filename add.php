
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <title>Dashboard Template · Bootstrap</title>

    </head>
    <style>

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

    </style>
    <body>
        <?php
        require 'connection.php';
        ?>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="height: 90px;">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Stellar Minds</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form action="search_book.php" method="post" style="width: 100%; ">
                <input  type="text" placeholder="Search...." aria-label="Search" id="bname" style="background:whitesmoke ;width:90%; height: 44px;outline: none;">
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
                                    <img src="https://img.icons8.com/fluent-systems-filled/24/000000/home.png" style="height: 20px"/> <span data-feather="home">Dashboard</span>
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
                                    <a class="nav-link" href="#">
                                        <img src="https://img.icons8.com/metro/26/000000/add-user-male.png" style="height: 20px; margin-right: 10px;"/><span data-feather="file-text">Add Admin</span>

                                    </a>
                                </li>

                            </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" >
                        <?php
                        if (isset($_POST['edit'])) {
                            ?>
                            <h1 class="h2">Update Book</h1>
                            <?php
                        } else {
                            ?>
                            <h1 class="h2">Add Book</h1>
                            <?php
                        }
                        ?>

                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
<?php
if (isset($_POST['edit'])) {
    ?>
                                    <form action="add.php" method="post">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary" style=" box-shadow: 0px 0px 3px;color: black;">Add Books</button>
                                    </form>
    <?php
} else {
    ?>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" disabled style="background-color: #333333; border-radius: 2px; box-shadow: 0px 1px 10px;color: white;" >Add Book</button>
                                    <?php
                                }
                                ?>

                                <form action="all_books.php" method="post">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary" style=" box-shadow: 0px 0px 3px;color: black;">All Books</button>
                                </form>
                            </div>

                        </div>

                    </div>
                    <form action="edit.php" method="post">
<?php
if (isset($_POST['edit'])) {
    $query = "select*from books where bid='" . $_POST['bid'] . "'";
    $result = mysqli_query($con, $query);
    while ($product = mysqli_fetch_assoc($result)) {
        ?>
                                <div class="add">
                                    <p><div style="width: 10%; height: 150px; border: 2px solid black" >
                                        <img src="<?php $product['image']; ?>" id="upload" style="height:150px; width: 100%;">
                                    </div><label><b>Choose Cover photo</b></label></p>
                                    <p><div class="input-group mb-3 " style="width: 150%;">

                                        <input type="file" class="custom-file-input" id="cover" name="image" style="width: 20%;"  autofocus required onchange="img_path()">
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"  style="width: 20%;" id="data"  ><?php echo $product['image']; ?></label>

                                    </div>
                                    <h5 style="font-size: 15px; color: #999999; font-family: sans-serif">Only in PNG,JPG & JPEG are allowed. File size must be 1MB or less</h5>    
                                    </p>
                                    <p><label><b>Book Id</b></label></p>
                                    <p><input type="text" name="bid" value="<?php echo $product['bid']; ?>" placeholder="Enter Book ID" id="data" required/></p>
                                    <p><label><b>Book Title</b></label></p>

                                    <p><input type="text" name="bname" value="<?php echo $product['bname']; ?>" placeholder="Enter Book Title" id="data" required/></p>
                                    <p><label><b>Select class</b></label></p>
                                    <p><select name="class"  style="width: 30%; outline: none; height: 40px" >
                                            <option  hidden value="<?php echo $product['class']; ?>"><?php echo $product['class']; ?></option>
                                            <option value="Class 9">Class 9</option>
                                            <option value="Class 10">Class 10</option>
                                            <option value="Class 11">Class 11</option>
                                            <option value="Class 12">Class 12</option>
                                        </select></p>
                                    <p><label><b>Book Author</b></label></p>
                                    <p><input type="text" name="author" value="<?php echo $product['author']; ?>" placeholder="Enter Author's name" id="data" required/></p>
                                    <p><label><b>Upload Book</b></label></p>
                                    <p><div class="input-group mb-3 " style="width: 150%;">

                                        <input type="file" class="custom-file-input" id="inputGroupFile03" name="blink">
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"  style="width: 20%;" id="data"><?php echo $product['link']; ?></label>
                                        <h5 style="font-size: 15px; color: #999999; font-family: sans-serif">Only in PDF are allowed</h5>
                                    </div>

                                    </p>
                                    <p><label><b>Description of Book</b></label></p>
                                    <p><textarea name="description" rows="20" cols="100"  required>
        <?php echo $product['description']; ?>
                                        </textarea></p>
                                    <button type="submit" class="btn btn-success">UPDATE</button>
                                    <button type="reset" class="btn btn-danger">RESET</button>
                                </div>
                                            <?php
                                        }
                                    } else {
                                        ?>
                        </form>
                        <form action="add_data.php" method="post" enctype="multipart/form-data">
                            <div class="add">
                                <p><div style="width: 10%; height: 150px; border: 2px solid black" >
                                    <img src="images/white.jpg" id="upload" style="height:147px; width: 100%;">
                                </div><label><b>Choose Cover photo</b></label></p>
                                <p><div class="input-group mb-3 " style="width: 150%;">

                                    <input type="file" class="custom-file-input" id="cover" name="image" style="width: 20%;"  autofocus required onchange="img_path()">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"  style="width: 20%;" id="data"  >Choose file</label>

                                </div>
                                <h5 style="font-size: 15px; color: #999999; font-family: sans-serif">Only in PNG,JPG & JPEG are allowed. File size must be 1MB or less</h5>    
                                </p>
                                <p><label><b>Book Id</b></label></p>
                                <p><input type="text" name="bid" value="" placeholder="Enter Book ID" id="data" required/></p>
                                <p><label><b>Book Title</b></label></p>

                                <p><input type="text" name="bname" value="" placeholder="Enter Book Title" id="data" required/></p>
                                <p><label><b>Select class</b></label></p>
                                <p><select name="class" style="width: 30%; outline: none; height: 40px">
                                        <option selected disabled hidden>select class</option>
                                        <option>Class 9</option>
                                        <option>Class 10</option>
                                        <option> Class 11</option>
                                        <option>Class 12</option>
                                    </select></p>
                                <p><label><b>Book Author</b></label></p>
                                <p><input type="text" name="author" value="" placeholder="Enter Author's name" id="data" required/></p>
                                <p><label><b>Upload Book</b></label></p>
                                <p><div class="input-group mb-3 " style="width: 150%;">

                                    <input type="file" class="custom-file-input" id="inputGroupFile03" name="blink">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"  style="width: 20%;" id="data">Choose file</label>
                                    <h5 style="font-size: 15px; color: #999999; font-family: sans-serif">Only in PDF are allowed</h5>
                                </div>

                                </p>
                                <p><label><b>Description of Book</b></label></p>
                                <p><textarea name="description" rows="20" cols="100" required>
                                    </textarea></p>
                                <button type="submit" class="btn btn-success">ADD</button>
                                <button type="reset" class="btn btn-danger">RESET</button>
                            </div>
                        </form>
    <?php
}
?>

            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="dashboard.js"></script></body>
<script>
                                    /*add this to all product
                                     
                                     $(document).ready(function(){
                                     $('#search').click(function(event){
                                     event.preventDefault();
                                     var d=$('#bname').val;
                                     $.ajax({
                                     url: 'search.php',
                                     type: 'post',
                                     data:{
                                     "banme": d
                                     },
                                     dataType: "text"
                                     });
                                     }); 
                                     });
                                     */
                                    $(".custom-file-input").on("change", function () {
                                        var fileName = $(this).val().split("\\").pop();
                                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                    });
                                    function img_path() {
                                        var input = document.getElementById("cover");
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#upload').attr('src', e.target.result);
                                            }

                                            reader.readAsDataURL(input.files[0]);

                                        }
                                    }
</script>
</html>
