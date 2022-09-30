<?php

include_once 'model.php';

class Controller extends Database 
{


    
    public function CreateUser($uniqId, $username, $email, $password, $upload, $filename)
    {
        $sql = 'INSERT INTO `users`(`uniId`, `username`, `email`, `password`, `upload`, `filename`)
         VALUES (:uniId, :username, :email, :password, :upload, :filename)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'uniId' => $uniqId, 
            'username' => $username, 
            'email' => $email, 
            'password' => $password, 
            'upload' => $upload,
            'filename' => $filename
        ]);

        return $stmt;
    }



    public function validateEmail($email)
    {
        $sql = 'SELECT `email`, `password` FROM `users` WHERE email=:email';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'email' => $email
        ]);

        $fetchEmail = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fetchEmail;
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


    public function Login($email)
    {
        $sql = 'SELECT * FROM `users` WHERE email=:email';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'email' => $email
        ]);

        $fetchAll = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fetchAll;
    }


    // create questions and fetch questions

    public function CreateQue($uid, $userid, $question)
    {
        $sql = 'INSERT INTO `questions`(`uid`, `userid`, `questions`)VALUES (:uid,:userid, :questions)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'uid' => $uid, 
            'userid' => $userid, 
            'questions' => $question
        ]);

        return true;
    }
    public function FetchQue()
    {
        $sql = 'SELECT * FROM `questions`';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([]);
        $fetchQue = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchQue;
    }

    public function FetchVerified($uid)
    {
        $sql = 'SELECT * FROM `users` WHERE uniId=:uniId';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'uniId' => $uid
        ]);
        $fetchveri = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fetchveri;
    }
    // delet questions
    public function DeletePost($id)
    {
        $sql = 'DELETE FROM `questions` WHERE  id=:id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        return true;
    }
    
    // edit questions
    public function EditPost($id)
    {
        $sql = 'SELECT * FROM `questions` WHERE id=:id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        $editP = $stmt->fetch(PDO::FETCH_ASSOC);
          return $editP;
    }

    public function UpdatePost($id, $question)
    {
        $sql = 'UPDATE `questions` SET `questions`=:questions WHERE  id=:id';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'questions' => $question,
            'id' => $id
        ]);
         return true;
    }

    public function FetchRev()
    {
        $sql = 'SELECT * FROM `reviews`';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([]);
        $fetchQue = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchQue;
    }


    public function CreateRev($uid, $userid, $reviews)
    {
        $sql = 'INSERT INTO `reviews`(`uid`, `userid`, `reviews`)VALUES (:uid,:userid, :reviews)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'uid' => $uid, 
            'userid' => $userid, 
            'reviews' => $reviews
        ]);

        return true;
    }









} 