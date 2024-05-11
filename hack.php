<!DOCTYPE html>
<html>
<head>
	<title>Quiz Project</title>
	<link rel="stylesheet" href="hack.css">
</head>
<body>
	<div class="quiz-container">
		<h1>Quiz Project</h1>
		<form action="score.php" method="post" id="quiz-form">
			<div class="question-container">
				<h2>Question 1</h2>
				<p>What is the capital of France?</p>
				<input type="radio" name="q1" value="a">Paris<br>
				<input type="radio" name="q1" value="b">London<br>
				<input type="radio" name="q1" value="c">Madrid<br>
			</div>
			<div class="question-container">
				<h2>Question 2</h2>
				<p>What is the largest planet in our solar system?</p>
				<input type="radio" name="q2" value="a">Jupiter<br>
				<input type="radio" name="q2" value="b">Saturn<br>
				<input type="radio" name="q2" value="c">Mars<br>
			</div>
			<button type="submit" id="submit-btn">Submit</button>
		</form>
	</div>
</body>
</html>
<?php
session_start();
$u=$_SESSION["u"];
$_SESSION["use"]=$u;
?>