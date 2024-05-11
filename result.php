<!DOCTYPE html>
<html>
<head>
	<title>Quiz Results Certificate</title>
	<style>
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
			margin-top: 100px;
			font-size: 18px;
			font-style: italic;
		}
	</style>
</head>
<body>
	<h1>Quiz Results Certificate</h1>
	<p>Congratulations! You have successfully completed the quiz.</p>
	<div class="result">Your score: 85%</div>
	<div class="signature">John Smith<br>Certification Manager</div>
</body>
</html>
if($scores>3)
{
    echo"Congratulations ".$u;
}
else{
    echo"".$u." you have to practice more";
}

echo"</div>";
echo"<div id='t2'>";
echo"<br>You have successfully completed the Task";
echo '<br>Your score is: ' . $scores;
echo"</div>";
echo"<div>";
echo'<br><br><br><table border="1" style="text-align: center;margin-left:10.3cm;border-color: blueviolet;height:4cm;width:15cm; ">';
    echo'<tr style="font-size:0.7cm;padding-top: 1cm;text-align: center;"><th>coding language <th>Number of questions 
    <th> Correct Answers</tr>';
    echo"<tr><td> HTML<td>5<td>".$scores;
echo"</table>";
echo"</div >";
?>