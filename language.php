<html>
    <style>
        .header p{
            text-decoration: none;
            color:black;
            font-size: 150%;
            font-family:'Times New Roman', Times, serif;
            margin-left: 1cm;
            margin-top:0cm;  
        }
        .header{
            width: 100%;
            height: 1.5cm;
            padding-top: 0cm;
            padding-bottom: 1cm;
            color: white;
            margin-left: 0%;
            box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-image: linear-gradient( #6CB4EE,white);
        }
        .code{
            display: flex;
            padding-top: 1cm;
        }
        .header a{
            text-decoration: none;
            color:black;
            font-size: 150%;
            font-family:'Times New Roman', Times, serif;
            margin-left: 1cm;
            margin-top:0cm;  
        }
        .lan{
            display: flex;
            padding: 1cm;

        }
        .lang{
            display: flex;
        }
        footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
      }
      
      .container {
        max-width: 960px;
        margin: 0 auto;
        text-align: center;
      }
      
      p {
        margin: 0;
      }
      
        </style>
        <body>
<div class="header">
    <div class="code">
    <p>Choose Language</p>
</div><br><br>
<div class="lan">
<img src="img/htmll.png" style="height: 4cm; padding-left: 2cm; margin-left: 4cm;">
<img src="img/javal.png" style="height: 4cm; padding-left: 2cm;">
<img src="img/php.png" style="height: 4cm; padding-left: 2cm;">
</div>
<div class="lang">
    <a href="html.php" style="margin-left: 8.3cm;">HTML</a>
   <a href="java.php" style="padding-left: 4.5cm;">Java</a>
    <a href="hack.php" style="padding-left: 5cm;">PHP</a>
</div><br><br>
<div class="lan">
    <img src="img/cssl.png" style="height: 4cm; padding-left: 2cm; margin-left: 4cm;">
    <img src="img/python1.jpg" style="height: 4cm; padding-left: 3.3cm;">
    <img src="img/js1.png" style="height: 4cm; padding-left: 2cm;">
    </div>
    <div class="lang">
        <a href="hack.php" style="margin-left: 8.3cm;">CSS</a>
       <a href="hack.php" style="padding-left: 4.5cm;">Python</a>
        <a href="hack.php" style="padding-left: 5cm;">JavaScript</a>
    </div><br><br><BR>
    <footer>
        <div class="container">
          <p>&copy; 2023 Hackathon the Code Fest</p>
        </div>
      </footer>
</div>

</div>

</body>
</html>
<?php
session_start();
$u=$_SESSION["userid"];
$_SESSION["u"]=$u;
?>