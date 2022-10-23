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


    public function InsertSearch($uid, $userid, $search)
    {
        $sql = "INSERT INTO `search`(`uid`, `userid`, `search`) VALUES (:uid, :userid, :search)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'uid' => $uid, 
            'userid' => $userid, 
            'search' => $search
        ]);
        return true;
    }

    public function FetchChannel($value)
    {
        $sql = "SELECT * FROM `channels` WHERE channel_name LIKE '%".$value."%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetchSearch = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchSearch;
    }
    public function FetchChannelsubbed($value)
    {
        $sql = "SELECT * FROM `channels` WHERE channel_name LIKE '%".$value."%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetchSearch = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fetchSearch;
    }

    public function FetchVideos($value)
    {
        $sql = "SELECT * FROM `posts` WHERE title LIKE '%".$value."%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetchSearch = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchSearch;
    }

    public function FetchAllVideos()
    {
        $sql = 'SELECT * FROM `posts`';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetchSearch = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchSearch;
    }


    public function FetchAllChannels()
    {
        $sql = 'SELECT * FROM `channels`';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetchSearch = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fetchSearch;
    }

    public function FetchCat()
    {
        $sql = "SELECT * FROM `posts`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetchCat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchCat;
    }

    public function FetchSearch($value)
    {
        $sql = "SELECT * FROM `search` WHERE userid='$value'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $search = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $search;
    }

    public function FetchSubscribedChannel($channelid)
    {
        $sql = "SELECT * FROM `channels` WHERE channel_id='$channelid'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetchsubscribedChannel = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fetchsubscribedChannel;
    }
    
    public function UserSubscribe($cid, $cname, $channel_image, $subscribers, $verified ,$sid, $sname, $status)
    {
        $sql = "INSERT INTO `subscriptions`(`channel_id`, `channel_name`,`channel_image`, `subscribers`, `verified`, `subscriber_id`, `subscriber_name`, `status`) 
        VALUES (:cid, :cname, :channel_image, :subscribers, :verified , :sid, :sname, :status)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'cid' => $cid, 
            'cname' => $cname, 
            'channel_image' => $channel_image, 
            'subscribers' => $subscribers, 
            'verified' => $verified,
            'subscriber_id' => $sid, 
            'subscriber_name' => $sname, 
            'status' => $status
        ]);
        return true;
    }

    public function VerifySubscribedChannel($sid,$status)
    {
        $sql = "SELECT * FROM `subscriptions` WHERE subscriber_id='$sid' AND status='$status'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $VerifysubscribedChannel = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $VerifysubscribedChannel;
    }

    public function GetSubbedChannel($sid,$status)
    {
        $sql = "SELECT * FROM `subscriptions` WHERE subscriber_id='$sid' AND status='$status'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $VerifysubscribedChannel = $stmt->fetch(PDO::FETCH_ASSOC);
        return $VerifysubscribedChannel;
    }


    public function GrabSubs($cid,$status)
    {
        $sql = "SELECT * FROM `subscriptions` WHERE channel_id='$cid' AND status='$status'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $VerifysubscribedChannel = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $VerifysubscribedChannel;
    }

    public function InsertSubs($cid,$subs)
    {
        $sql = "UPDATE `channels` SET `subscribers`='$subs' WHERE channel_id='$cid'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        // return true;
        if($stmt):
            $sql = "UPDATE `subscriptions` SET `subscribers`='$subs' WHERE channel_id='$cid'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();  
         endif;
     return true;
    }

    public function fetchChannelsubs($sid)
    {
        $sql = "SELECT * FROM `channels` WHERE channel_id=$sid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetchVerifysubscribedChannel = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetchVerifysubscribedChannel;
    }
    // UPDATE `subscriptions` SET `id`='[value-1]',`channel_id`='[value-2]',`channel_name`='[value-3]',`channel_image`='[value-4]',`subscribers`='[value-5]',`verified`='[value-6]',`subscriber_id`='[value-7]',`subscriber_name`='[value-8]',`status`='[value-9]',`datesubscribed`='[value-10]' WHER
} 
