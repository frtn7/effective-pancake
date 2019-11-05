<?php
if(isset($_POST['login'])){
    $username = preg_replace('/[^A-Za-z0-9]/', '', $_POST['username']);
    $password = md5($_POST['password']);
    if(file_exists('users/'.$username.'.xml')){
        $user = simplexml_load_file('users/'.$username.'.xml');
        if($password == $user->password){
            session_start();
            $_SESSION['username'] = $username;
            header('Location: homepage.php');
            die;
        }
        else{
            die('Incorrect password');
        }
    }
    else{
        die('Incorrect username');
    }
}