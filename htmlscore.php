<html>
    <head>
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
        body {
			font-family: Arial, sans-serif;
			text-align: center;
		}
		h1 {
			margin-top: 50px;
		}
		.result {
			font-size: 24px;
			font-weight: bold;
			margin-top: 50px;
		}
		.signature {
			margin-top: 50px;
			font-size: 18px;
			font-style: italic;
		}
        .code{
            display: flex;
            padding-top: 1cm;
        }
        footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
      }
      
      .container {
        max-width: 960px;
        margin: 1 auto;
        text-align: center;
      }
        </style>
    </head>
<body>
<div class="header">
    <div class="code">
    <p>Result</p>
</div><br><br>
</div>

<?php
$score = array("q1"=>"a","q2"=>"b","q3"=>"a","q4"=>"c","q5"=>"c");
$scores=0;
foreach($_POST as $key=>$value)
{
    if(isset($score[$key]) && $score[$key]==$value)
    {
        $scores++;
    }
}
$s=$scores*100/5;
session_start();
$u=$_SESSION["use"];
echo"<br><br><h1>HTML Task Results Certificate</h1>";
	echo"<p>Congratulations! ".$u." You have successfully completed the HTML task.</p>";
	echo'<div class="result">Your score:'.$s.' %</div>';
    echo'<p>Coding Language:HTML<br>Number of Correct Answers:'.$scores.'</p>';
	echo'<div class="signature">Pachpind Siddhi<br>Certification Manager</div>';
?>
<html>
<br><br><br><br><br>
<footer>
        <div class="container">
          <p>&copy; 2023 Hackathon the Code Fest</p>
        </div>
      </footer>
</html>
<?php
$wa=5-$scores;
$con=mysql_connect("localhost","root","");
if($con==false)
die("error in connection");
mysql_query("use nikita");
$res1=mysql_query("insert into result values ($scores,$wa,$scores,'$u','html')");
?>
