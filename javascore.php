<?php
$score = array("q1"=>"b","q2"=>"b","q3"=>"a","q4"=>"c","q5"=>"c");
$scores=0;
foreach($_POST as $key=>$value)
{
    if(isset($score[$key]) && $score[$key]==$value)
    {
        $scores++;
    }
}
session_start();
$u=$_SESSION["use"];
echo"userid=".$u;
echo 'Your score is: ' . $scores;
?>