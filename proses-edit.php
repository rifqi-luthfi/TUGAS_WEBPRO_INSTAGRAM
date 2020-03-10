<?php
    include_once('connection.php');
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $website = $_POST['website'];
    $bio = $_POST['bio'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];


    $query = mysqli_query($connection,"UPDATE login SET 
                            username = '$username',
                            name = '$name',
                            website = '$website',
                            bio = '$bio',
                            email = '$email',
                            phone = '$phone',
                            gender = '$gender'
                            where id = 1 ");

    
    include_once('profile.php');


?>