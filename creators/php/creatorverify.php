<?php

include_once 'controller.php';

$Creator = new Controller();


if (isset($_POST['action']) && $_POST['action'] === 'BecomeCreator') :

    $email = $Creator->validateInputs($_POST['verify']);
    $verifyCreator = $Creator->CreatorVerify($email);

    if ($verifyCreator != null) :

        if($verifyCreator['verified'] == 0) :
            $verified = 0;
        else :
            $verified = 1;
        endif;

            $insertCreator = $Creator->CreatorInsert($verifyCreator['id'], $verifyCreator['uniId'],$verifyCreator['email'], $verifyCreator['upload'], $verified);
        
        if ($insertCreator != null) :
            echo 'Verified';
            $_SESSION['Creators'] = $email;
        else :
            echo 'No account found';
        endif;

    else :
        echo 'No account found';
    endif;

endif;


if (isset($_POST['action']) && $_POST['action'] === 'VerifyCreator') :

    $email = $Creator->validateInputs($_POST['verify']);
    $verifyCreator = $Creator->VerifyCreator($email);

    if($verifyCreator && $verifyCreator != null) : 
        echo 'Verified';
        $_SESSION['Creators'] = $email;
     else :
        echo 'No account found';
    endif;
    

endif;



if(isset($_POST['action']) && $_POST['action'] === 'checkedLogged') :

    if(isset($_SESSION['Creators'])):
        echo 'Right';
    else:
        echo 'Wrong';
    endif;

endif;

