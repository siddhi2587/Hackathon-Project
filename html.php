<!DOCTYPE html>
<html>
<head>
	<title>Quiz Project</title>
	<link rel="stylesheet" href="hack.css">
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
        .quiz-container {
	max-width: 600px;
	margin: 0 auto;
	padding: 20px;
	text-align: center;
}

.question-container {
	margin-bottom: 20px;
	text-align: left;
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
    <p>HTML</p>
</div><br><br>
</div>
	<div class="quiz-container">
		<form action="htmlscore.php" method="post" id="quiz-form">
			<div class="question-container">
				<h2>Question 1</h2>
				<p> In which part of the HTML metadata is contained?</p>
                <input type="radio" name="q1" value="a">a) head tag<br>
				<input type="radio" name="q1" value="b">b) title tag<br>
				<input type="radio" name="q1" value="c">c) html tag<br>
                <input type="radio" name="q1" value="d">d)body tag</p><br>
			</div>
			<div class="question-container">
				<h2>Question 2</h2>
				<p> Which of the following is not the element associated with the HTML table layout?</p>
				<input type="radio" name="q2" value="a">a) alignment<br>
				<input type="radio" name="q2" value="b">b) color<br>
				<input type="radio" name="q2" value="c">c) size<br>
                <input type="radio" name="q2" value="d">d) spanning<br>
			</div>
            <div class="question-container">
				<h2>Question 3</h2>
				<p>Which element is used for or styling HTML5 layout?</p>
				<input type="radio" name="q3" value="a">a) CSS<br>
				<input type="radio" name="q3" value="b">b) jQuery<br>
				<input type="radio" name="q3" value="c">c) JavaScript<br>
                <input type="radio" name="q3" value="d">d) PHP<br>
			</div>
            <div class="question-container">
				<h2>Question 4</h2>
				<p>  Which character is used to represent when a tag is closed in HTML?</p>
				<input type="radio" name="q4" value="a">a) #<br>
				<input type="radio" name="q4" value="b">b) !<br>
				<input type="radio" name="q4" value="c">c) /<br>
                <input type="radio" name="q4" value="d">d) \<br>
			</div>
            <div class="question-container">
				<h2>Question 5</h2>
				<p>  Which attribute specifies a unique alphanumeric identifier to be associated with an element?</p>
				<input type="radio" name="q5" value="a">a) type<br>
				<input type="radio" name="q5" value="b">b) article<br>
				<input type="radio" name="q5" value="c">c) id<br>
                <input type="radio" name="q5" value="d">d) class<br>
			</div>
			<button type="submit" id="submit-btn">Submit</button>
		</form>
	</div>
    <br><br>
<footer>
        <div class="container">
          <p>&copy; 2023 Hackathon the Code Fest</p>
        </div>
      </footer>
</body>
</html>
<?php
session_start();
$u=$_SESSION["u"];
$_SESSION["use"]=$u;
?>