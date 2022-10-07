<?php

    include_once 'controller.php';

    $user = new Controller();

    if (!isset($_SESSION['Account'])) 
    {
        header('location: login.php');
    }
    $output = '';
    
    $sessionEmail = $_SESSION['Account'];
    $grabuser = $user->CaptureUser($sessionEmail);

    // print_r($grabuser);
    return $grabuser['id'];
    return $grabuser['uniId'];
    return $grabuser['username'];
    return $grabuser['email'];
    return $grabuser['upload'];
    return $grabuser['filename'];
    return $grabuser['datecreated'];
