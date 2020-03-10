<?php
    include_once('connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($connection,"SELECT * FROM login WHERE username = '$username' AND password = '$password' ");

    $cek = mysqli_num_rows($query);

    if($cek == 1){
        include_once('feed.php');
    }else{
        include_once('index.php');
    }

?>