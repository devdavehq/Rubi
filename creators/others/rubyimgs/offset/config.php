<?php
$userBlog = 'root';
$host ='localhost';
$pass ='';
$dbname = 'blog';
  $conn = new PDO("mysql:host=$host; dbname=$dbname",$userBlog,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  
  function totalRow() {
    global $conn;
    $sql ="SELECT COUNT(*) AS total FROM posts";
    $post = $conn->query($sql)->fetch();
    return $post['total'];

  }
    
?>