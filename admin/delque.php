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
<h1> Form to delete a question</h1>
<h2>Delete Question</h2>
	<form method="POST" action="admin.php">
		<label>Question ID:</label><br>
		<input type="text" name="id"><br><br>
		<input type="submit" value="Delete Question">
	</form>
</body>
</html>
<?php
    $conn = mysqli_connect("localhost", "username", "password", "quiz_db");
    $id = $_GET['id'];
    $sql = "DELETE FROM quiz_questions WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Question deleted successfully!";
    } else{
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>