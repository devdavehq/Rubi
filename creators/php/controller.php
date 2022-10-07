<?php

include_once 'model.php';

class Controller extends Database 
{

    
public function CreatorVerify($email)
{
     $sql = 'SELECT * FROM `users` WHERE email=:email';
     $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'email' => $email
    ]);
    
    $fetchCreator = $stmt->fetch(PDO::FETCH_ASSOC);
    return $fetchCreator;
 }

public function CreatorInsert($id,$cname,$cemail,$upload,$verified)
{
    $sql = 'INSERT INTO `channels`(`channel_id`, `channel_name`, `channel_email`, `channel_image`, `verified`)
     VALUES (:channel_id, :channel_name, :channel_email, :channel_image, :verified)';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'channel_id' =>$id, 
        'channel_name' =>$cname, 
        'channel_email' =>$cemail, 
        'channel_image' =>$upload, 
        'verified' =>$verified
    ]);
    return true;
}

// capture Session user
public function CaptureUser($email)
{
    $sql = 'SELECT * FROM `users` WHERE email=:email';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'email' => $email
    ]);

    $fetchEmail = $stmt->fetch(PDO::FETCH_ASSOC);
    return $fetchEmail;
}

// re verify creator when logged out through url
public function VerifyCreator($email)
{
    $sql = 'SELECT * FROM `channels` WHERE channel_email=:email';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'email' => $email
    ]);

    $fetchEmail = $stmt->fetch(PDO::FETCH_ASSOC);
    return $fetchEmail;
}


















} 