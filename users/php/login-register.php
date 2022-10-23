<?php

    include_once 'controller.php';

    $createAcc = new Controller();

    if (isset($_FILES['upload'])) 
    {
        
        $user = $createAcc->validateInputs($_POST['username']);
        $uniqId = '@'.$user.uniqid();
        $email = $createAcc->validateInputs($_POST['email']);
        $password = $createAcc->validateInputs($_POST['password']);
        $file = $createAcc->validateInputs($_FILES['upload']['name']);

        if ($createAcc->validateEmail($email)) 
        {
            echo 'email already Exist*';
        }else 
        {
            if (!empty($user) || !empty($email) || !empty($password) || !empty($file)) 
            {
                $hashp = password_hash($password, PASSWORD_DEFAULT);

                $target = '../../media/images/';
                if (file_exists($target) && is_dir($target)) {
                    $path = $target.$file;
                    move_uploaded_file($_FILES['upload']['tmp_name'], $path);
                    $reg = $createAcc->CreateUser($uniqId, $user, $email, $hashp, $file, $path);
                     if ($reg) 
                     {
                         echo 'registered';
                         $_SESSION['Account'] = $email;
                     }
                }
            } else 
            {
               echo 'fields cannot be empty';
            }
            
        }
    }
    
   if (isset($_POST['action']) && $_POST['action'] === 'logUser') 
   {
        $email = $createAcc->validateInputs($_POST['email']);
        $password = $createAcc->validateInputs($_POST['password']);

        $loguser = $createAcc->Login($email);
        if ($loguser != null)
         {
            if (password_verify($password, $loguser['password'])) { 
                echo 'verified';
                $_SESSION['Account'] = $email;
            }else {
                echo 'Password does not exist';
            }
        }else 
            {
                echo 'User not Found';
            }
       
   }
   ?>