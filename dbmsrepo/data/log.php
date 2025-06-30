<?php
    $conn=mysqli_connect("localhost:3307","root","12345789","users");
    if($conn){
        echo 'connected';
    }
    else{
       die("unable to connect");
    }
    $rollnumber=$_POST['studentroll'];
    $presc=$_POST['textContent'];
    $sql="SELECT * FROM students WHERE roll='$rollnumber'";
    $res=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
    if($num>0){
        $row=mysqli_fetch_assoc($res);
        $sql2="INSERT INTO log(name,roll,age,gender,issue,prescription) values('".$row['name']."','".$row['roll']."','".$row['age']."','".$row['gender']."','".$row['issue']."','$presc')";
        $res2=mysqli_query($conn,$sql2);
    }
    $sql3="DELETE FROM students WHERE roll='$rollnumber'";
    $res3=mysqli_query($conn,$sql3);
    header("location: ../welcome.php");
?>