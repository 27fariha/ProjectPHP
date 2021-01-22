<?php
    include('connection.php');
    if(isset($_POST['sub']))
    {
    $n=$_POST['name'];
    $q="insert into category(Category_Name) values('$n')";
    $res=mysqli_query($con,$q);
    if($res){
    echo "
    <script>alert('Category Added');window.location.href='category_read.php'</script>";

    }
    else{

    echo "none";
    }


    }
    ?>