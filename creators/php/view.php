<?php

    include_once 'controller.php';

    $Creators = new Controller();

    if(isset($_SESSION['Account'])) :
   
        $output = '';
        
        $sessionEmail = $_SESSION['Account'];
        $grabuser = $Creators->CaptureUser($sessionEmail);

        // print_r($grabuser);
        return $grabuser['id'];
        return $grabuser['uniId'];
        return $grabuser['username'];
        return $grabuser['email'];
        return $grabuser['upload'];
        return $grabuser['filename'];
        return $grabuser['verified'];
        return $grabuser['datecreated'];

        
    endif;
    