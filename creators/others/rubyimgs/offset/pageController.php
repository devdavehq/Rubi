<?php
include 'config.php';

function postPaginaton($currentPage = 1, $recordsPerPages = 3){
    // offset = 1 2 3  4  5  6  7
    //records = 4 8 12 16 20 24 25
    global $conn;
    $sql = "SELECT * FROM posts LIMIT :offset, :numberOfRecords";
    $data =[
        'offset'=>($currentPage - 1) *  $recordsPerPages,
        'numberOfRecords'=> $recordsPerPages
    ];
    $stmt = $conn->prepare($sql);
    $result= $stmt->execute($data);
    $numbersOfPages = totalRow() / $recordsPerPages;
    $post =$stmt->fetchAll();
    return [
        'post'=>$post,
        'prevPg'=>$currentPage > 1 ? $currentPage - 1 : false,
        'nextPg'=>$currentPage + 1 <= $numbersOfPages ? $currentPage + 1 : false
    ];
}
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $pageData = postPaginaton($currentPage);