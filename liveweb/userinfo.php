<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo"connection successful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'userdata');

$name = $_POST['name'];
// if(isset($_POST['submit'])){
//     if(isset($_POST['user'])){
//        $user = $_POST['user'];
//        echo "Username: ".$user."<br>";

//     }
//  }

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

 

$query = "insert into userinfodata (name,email,mobile,comments) values ('$name', '$email', '$mobile', '$comments')";

mysqli_query($con,$query);

header('location:index.php');


?>