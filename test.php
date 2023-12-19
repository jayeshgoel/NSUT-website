<?php
    $name=$_POST['myName'];
    $rollno=$_POST['Roll-Number'];
    $email=$_POST['myEmail'];
    $dateofbirth=$_POST['myDate'];
    $gender=$_POST['myGender'];
    $password=$_POST['password'];

    // DATABASE CONNECTION
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);

    }
    else{
        $stmt = $conn->prepare("insert into data($name,$rollno,$email,$dateofbirth,$gender,$password) values(?,?,?,?,?,?)") ;
        $stmt->bind_param("ssssss");
        $stmt->execute();
        echo "registeration successful";
        $stmt->close();
        $conn->close();
    }
?>