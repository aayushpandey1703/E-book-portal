<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        .main{
            margin-left: 36%;
            margin-top: 18%;
        }
      
        #bar{
            background: blue;
            border-radius: 10px;
            margin-top: 4%;
            width: 0%;
            height: 10px;
            animation-delay: 1s;
            animation-name: load;
            animation-duration: 5s;
        }
        @keyframes load{
            0% {width: 0%;}
            50%{background: #ff0033;}
            100% {width: 50%;}
        }
        @keyframes change{
          0% {color: white;}
          100 {color: white;}
          
            
        }
        img{
            font-family: monospace;
            font-size: 100px;
            font-weight: 100;
           position: inherit;
           color: black;  
            animation-name: change;
            animation-duration: 3s;
        }
       
    </style>
    <body onload="setTimeout(function(){window.location = 'Home.php';}, 5000)">
        
        <div class="main">
            <img src="images/lg2.png">
            <div id="bar"></div>
        </div>
    </body>
</html>
