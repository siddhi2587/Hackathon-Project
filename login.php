<html>
    <head>
       <title>login to hackthon the code fest</title>
       <style>
        body{
            margin-top: 150px;
            margin-bottom: 150px;
        }
        .form {
  width: 40%;
  height: 270px;
  border: 0px solid black;
  padding-top: 50px;
  padding-bottom: 50px;
  color: white;
  margin: auto;
  text-align:center;
  box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-image: linear-gradient( #6CB4EE,#0a2351);
}
.form a{
    color:white;
    color: #ccc;
}
.text{
    font-size: 150%;
    font-family:'Times New Roman', Times, serif;
}
.button {
  background-color: #ccc;
  border: 4%;
  color: black;
  padding: 4px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
}
input[type=text] {
  width: 40%;
  padding: 6px 10px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=text]:focus {
  border: 3px solid #555;
}
input[type=password] {
  width: 40%;
  padding: 6px 10px;
  margin: 4px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=password]:focus {
  border: 3px solid #555;
}
       </style>
    </head>
    <body>
        <div class="form">
        <form method="post" action="login.php">
            <div class="text">Enter Login Id:</div><br>
            <input type="text"  name="t1"><br><br>
            <div class="text">Enter Password:</div><br>
            <input type="password"  name="t2"><br><br>
            <input type="submit" class="button" value="Login">
        </form>
        <div class="text">Not Register?<a href="register.php">Create an account</a></div> 
    </div>
    </body>
</html>
<?php
$con=mysql_connect("localhost","root","");
if($con==false)
die("error in connection");
mysql_query("use siddhi");
if(isset($_POST["t1"]) && isset($_POST["t2"]))
{
    $u=$_POST["t1"];
    $p=$_POST["t2"];
    $res=mysql_query("select * from upass where uname='$u' and pass='$p' ");
if($u=="nikita" && $p=="123")
    header("location:Admin.php");
else if($row=mysql_fetch_array($res))
    header("location:language.php");
    else
    echo'
    <script type="text/Javascript">
    window.alert("incorrect userid or pass");
    </script>';
    
}
session_start();
if(isset($_POST["t1"])){
$u=$_POST["t1"];

$_SESSION["userid"]=$u;
}
?>
