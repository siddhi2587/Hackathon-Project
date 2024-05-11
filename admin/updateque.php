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
<h1>Form to update a question</h1>
<h2>Update Question</h2>
	<form method="POST" action="admin.php">
		<label>Question ID:</label><br>
		<input type="text" name="id"><br><br>
		<label>Question:</label><br>
		<textarea name="question"></textarea><br><br>
		<label>Options:</label><br>
		<input type="text" name="option1"><br>
		<input type="text" name="option2"><br>
		<input type="text" name="option3"><br>
		<input type="text" name="option4"><br><br>
		<label>Answer:</label><br>
		<input type="text" name="answer"><br><br>
		<input type="submit" value="Update Question">
	</form>
</body>
</html>
<?php
    $conn = mysqli_connect("localhost", "username", "password", "quiz_db");
    $id = $_POST['id'];
    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $answer = $_POST['answer'];
    $sql = "UPDATE quiz_questions SET question='$question', option1='$option1', option2='$option2', option3='$option3', option4='$option4', answer='$answer' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Question updated successfully!";
    } else{
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>