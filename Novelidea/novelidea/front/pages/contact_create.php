<?php
    include('connection.php');
    if(isset($_POST['sub']))
    {
    $n=$_POST['name'];
    $e=$_POST['email'];
    $s=$_POST['subject'];
    $m=$_POST['message'];
    $d=$_POST['date'];

    $d = date('Y-m-d');
    $q="insert into messages(Date_Sent,Sender_Name,Sender_Email,Subject,Message) values('$d','$n','$e','$s','$m')";
    $res=mysqli_query($con,$q);
    if($res){
    echo "
    <script>alert('Message Sent');window.location.href='contact.php';</script>";

    }
    else{
        echo "
        <script>alert('Message sending failed');</script>";
    }

    }
    ?>