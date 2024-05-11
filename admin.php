<?php
$con=mysql_connect("localhost","root","");
if($con==false)
die("error in connection");
mysql_query("use siddhi");
echo"login information";
echo"<table border=1>";
echo"<tr><th>loginid<th>password</tr>";
$res1=mysql_query("select * from upass");
while($row=mysql_fetch_array($res1))
{
    echo"<tr><td>".$row[0];
    echo"<td>".$row[1];
    echo"</tr>";
}
echo"</table>";
echo"registration information";
echo"<table border=1>";
echo"<tr><th>name<th>email<th>login id<th>password</tr>";
$res2=mysql_query("select * from register");
while($row=mysql_fetch_array($res2))
{
    echo"<tr><td>".$row[0];
    echo"<td>".$row[1];
    echo"<td>".$row[2];
    echo"<td>".$row[3];
    echo"</tr>";
}
echo"</table>";
echo"results";
echo"<table border=1>";
echo"<tr><th>correct ans<th>wrong answer<th>score<th> login id<th>coding language</tr>";
$res3=mysql_query("select * from result");
while($row=mysql_fetch_array($res3))
{
    echo"<tr><td>".$row[0];
    echo"<td>".$row[1];
    echo"<td>".$row[2];
    echo"<td>".$row[3];
    echo"<td>".$row[4];
    echo"</tr>";
}
echo"</table>";
?>