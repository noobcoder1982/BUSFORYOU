<?php
    session_start();
    if(isset($_SESSION['id'])){
    $user_id=$_SESSION['id'];
    $name=$_SESSION['name'];
    }
    echo "Hello".$name;


    //$user_id=$_COOKIE['user_id'];
    //$name=$_COOKIE['name'];
    //echo "Hello" .$name;
?>