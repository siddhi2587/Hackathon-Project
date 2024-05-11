<html>
<head>
	<style>
        form,h2{
                padding: 10px;
                margin-left: 18%;
            }
            h1{
                text-align: center;
                padding-bottom: 30px;
            }
    </style>
</head>
<body>
	<h1> Form to add a new question</h1>
	<h2>Add Question</h2>
	<form method="POST" action="admin.php">
		<label>Question:</label><br>
		<textarea name="question"></textarea><br><br>
		<label>Options:</label><br>
		<input type="text" name="option1"><br>
		<input type="text" name="option2"><br>
		<input type="text" name="option3"><br>
		<input type="text" name="option4"><br><br>
		<label>Answer:</label><br>
		<input type="text" name="answer"><br><br>
		<input type="submit" value="Add Question">
	</form>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "username", "password", "quiz_db");
$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$answer = $_POST['answer'];
$sql = "INSERT INTO quiz_questions (question, option1, option2, option3, option4, answer) VALUES ('$question', '$option1', '$option2', '$option3', '$option4', '$answer')";
if(mysqli_query($conn, $sql)){
    echo "Question added successfully!";
} else{
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>