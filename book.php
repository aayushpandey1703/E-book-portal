
<html>
    <head>
                <link rel="stylesheet" href="header.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
           <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <style>
        embed{
           transition: 0.5s;
        }
        embed:hover{
            transform: scale(1.05);
            box-shadow: 0 100px 50px;
        }
       
    </style>
    <body>

        <embed src="cn.pdf" type="application/pdf" width="50%" height="700px" style="margin-left: 25%; margin-top: 5%; margin-bottom: 5%;" />  
        
                 <table>
            <thead>
                <th>name</th>
        </thead>
            <tbody id="response">
                
            </tbody>
        </table>
     
          
      
        <script type="text/javascript">
         
            $(document).ready(function(){
                $('#find').click(function(event){
                    event.preventDefault();
               var d=$('#myform input').val();
               $.ajax({
                  url: 'book_render.php',
                  type: 'post',
                  data:{
                      "d": d //submit data to form
                  },
                  dataType: "text",
                  success:function(result){
                      $('#response').html(result);
                      
                  }
               });
            });
        });
           
           
        </script>
          <a href="https://online.fliphtml5.com/kctge/nlun/#p=2" target="_top">saa</a>
        <h1 id="rand"><ul><li>ok</li></ul></h1>
        <button id="change" onclick="change()">ok</button>
<script>
   
    $(document).ready(function(){
         $('#change').click(function(event){
       $('#rand').html('<a href="ok.com">ko</a>');
         });
    });
   
</script>
       
    </body>
</html>
