<?php

$username="root";
$password="";
$host="localhost";
$database="Task1";
$conn = new mysqli($host, $username, $password , $database);

$m1 = $_POST['m1'] ;
$m2 = $_POST['m2'] ;
$m3 = $_POST['m3'] ;
$m4 = $_POST['m4'] ;
$m5 = $_POST['m5'] ;
$m6 = $_POST['m6'] ;

if(empty($_POST['status'])) { $status = 1 ; }
else{ $status = $_POST['status'] ; }


echo $m1.'<br>' ;
echo $m2.'<br>' ;
echo $m3.'<br>' ;
echo $m4.'<br>' ;
echo $m5.'<br>' ;
echo $m6.'<br>' ;
echo $status.'<br>' ;



$sql = "UPDATE Motors SET Motor1= ".$m1.",
                            Motor2= ".$m2.",
                            Motor3= ".$m3.",
                            Motor4= ".$m4.",
                            Motor5= ".$m5.",
                            Motor6= ".$m6.",
                            is_on = ".$status."
                            where id = 1 ;" ;

if ($conn->query($sql) === TRUE) {
    echo " Motor controls Updated!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

