<?php
if (isset($_POST['register'])){
    $username = preg_replace('/[^A-Za-z0-9]/', '', $_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if(file_exists('users/'.$username.'.xml')){
        die('Username already exists');
    }
    elseif($password !== $confirm_password){
        die('Passwords do not match');
    }
    else{
        $xml = new SimpleXMLElement('<user></user>');
        $xml->addChild('username', $username);
        $xml->addChild('password', md5($password));
        $xml->asXML('users/' . $username . '.xml');
        header('Location: index.php');
        die;
    }
}