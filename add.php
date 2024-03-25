<?php
require_once "conn.php";

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $task = $_POST['task'];
    $remarks = $_POST['remarks'];

    echo "Name: " . $name . "<br>";
    echo "Task: " . $task . "<br>";
    echo "Remarks: " . $remarks . "<br>";

    if(empty($name) || empty($task) || empty($remarks)){
        echo "INPUT FIELDS CANNOT BE EMPTY!!!!";
        exit();
    }


    $sql = "INSERT INTO new_crud (name, task, remarks) VALUES ('$name', '$task', '$remarks')";

 

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>
