<html>
    <head>
       <title>login to hackthon the code fest</title>
       <style>
        body{
            margin-top: 150px;
            margin-bottom: 150px;
        }
        .form {
  width: 50%;
  height: 270px;
  border: 0px solid black;
  padding-top: 40px;
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
    font-size: 130%;
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
        <form method="post" action="register.php">
        <div class="text">Enter Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"  name="name"></div>
            <br>
            <div class="text">Enter Email-Id:&nbsp
            <input type="text"  name="email"></div><br>
            <div class="text">Enter Login Id: &nbsp
            <input type="text"  name="id"></div><br>
            <div class="text">Enter Password:
            <input type="password"  name="t2"></div><br>
            <input type="submit" class="button" value="Login">
        </form>
        <div class="text">Already have account? <a href="login.php">Sign In</a></div> 
    </div>
    </body>
</html>
<?php
$con=mysql_connect("localhost","root","");
if($con==false)
die("error in connection");
mysql_query("use siddhi");
if(isset($_POST["id"]) && isset($_POST["t2"]))
{
    $u=$_POST["id"];
    $p=$_POST["t2"];
    $n=$_POST["name"];
    $e=$_POST["email"];
    $res=mysql_query("insert into upass values ('$u','$p')");
    if($res){}
$res1=mysql_query("insert into register values ('$n','$e','$u','$p')");
if($res && $n!=null && $e!=null && $u!=null &&$p!=null )
{
  header("location:language.php");
}
else
echo'
    <script type="text/Javascript">
    window.alert("Enter appropriate information..");
    </script>';
}
?>
