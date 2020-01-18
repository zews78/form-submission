<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, 'db1');

$Username = $_POST['username'];
$Password = $_POST['password'];

$query = "insert into userinfo1(username, password) values('$Username', '$Password')";

echo "$query";

mysqli_query($con, $query);

header('location:index.html');

?>