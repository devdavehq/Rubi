<?php

include_once 'view.php';

    
    $output = '';
    if (isset($_POST['action']) && $_POST['action'] === 'createQue') 
    {
       $questions =$user->validateInputs($_POST['questions']);

       $insertQues = $user->CreateQue($grabuser['id'], $grabuser['uniId'], $questions);

    }


    if (isset($_POST['action']) && $_POST['action'] === 'getAllQuestions') 
    {
       $fetchQues = $user->FetchQue();
        $fetchVeri = $user->FetchVerified($grabuser['uniId']);
       if ($fetchQues) {
        foreach ($fetchQues as $fetchQue) 
        {
            if ($fetchVeri['verified'] === 0) {
                $verified = '';
            }else {
                $verified = 'check-circle';
            }
           $output .='
           <div class="card-body">
                <div class="media-body overflow-visible">
                    <div class="border mb-5 p-4 br-5">
                        <nav class="nav float-end">
                            <div class="dropdown">
                                <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="" id="'.$fetchQue['id'].'"><i class="fe fe-flag mx-1"></i> Report Abuse</a>
                                    <a class="dropdown-item delete" href="" id="'.$fetchQue['id'].'"><i class="fe fe-trash-2 mx-1"></i> Delete</a>
                                </div>
                            </div>
                        </nav>
                        <a href="creators-profile.php?que='.$fetchQue['uid'].'"><h5 class="mt-0">'.$fetchQue['userid'].' <i class="fa fa-'.$verified.' text-primary verified"></i></h5></a>
                        <span><i class="fe fe-thumb-up text-danger"></i></span>
                        <a href="answer.php?que='.$fetchQue['id'].'" id="'.$fetchQue['id'].'"><h2 class="font-13 text-muted">'.$fetchQue['questions'].'</h2></a>
                        <a class="like" href="questions.php?que='.$fetchQue['id'].'" id="'.$fetchQue['id'].'">
                            <span class="badge btn-danger-light rounded-pill py-2 px-3">
                                <i class="fe fe-heart me-1"></i>0</span>
                        </a>
                        <span class="" id="">
                            <a href="answer.php?que='.$fetchQue['id'].'" id="'.$fetchQue['id'].'"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                        </span>
                    </div>
                </div>
            </div>';

                
        }
        echo $output;
    }
    }
 
    
    // delete post
    if (isset($_POST['deletePost'])) 
    {
        $id = $_POST['deletePost'];
      
       $del =$user->DeletePost($id);
       if ($del) {
            echo 'deleted success';
       }
    }

    // Edit post
    if (isset($_POST['editpost'])) 
    {
        $id = $_POST['editpost'];
      
       $edit =$user->EditPost($id);
       if ($edit) {
            echo json_encode($edit);
       }

    }
    // update post
    // if (isset($_POST['EditPost'])) 
    // {
    //     $id = $_POST['EditPost'];
    //     $questions =$user->validateInputs($_POST['questions']);

    //    $Update =$user->UpdatePost($id, $questions);
    //    if ($Update) {
    //         echo 'Update success';
    //    }
    // }

    // leaveReview

    if (isset($_POST['action']) && $_POST['action'] === 'leaveReview') 
    {
       $reviews =$user->validateInputs($_POST['reviews']);

       $insertrev = $user->CreateRev($grabuser['id'], $grabuser['uniId'], $reviews);

    }


    if (isset($_POST['action']) && $_POST['action'] === 'getrev') 
    {
       $fetchRevs = $user->FetchRev();
        $fetchVeri = $user->FetchVerified($grabuser['uniId']);
       if ($fetchRevs) {
        foreach ($fetchRevs as $fetchRev) 
        {
            if ($fetchVeri['verified'] === 0) {
                $verified = '';
            }else {
                $verified = 'check-circle';
            }
           $output .='
           <div class="card-body">
                <div class="media-body overflow-visible">
                    <div class="border mb-5 p-4 br-5">
                        <nav class="nav float-end">
                            <div class="dropdown">
                                <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="" id="'.$fetchRev['id'].'"><i class="fe fe-flag mx-1"></i> Report Abuse</a>
                                    <a class="dropdown-item delete" href="" id="'.$fetchRev['id'].'"><i class="fe fe-trash-2 mx-1"></i> Delete</a>
                                </div>
                            </div>
                        </nav>
                        <a href="creators-profile.php?rev='.$fetchRev['uid'].'"><h5 class="mt-0">'.$fetchRev['userid'].' <i class="fa fa-'.$verified.' text-primary verified"></i></h5></a>
                        <span><i class="fe fe-thumb-up text-danger"></i></span>
                        <a href="reviews.php?rev='.$fetchRev['id'].'" id="'.$fetchRev['id'].'"><h2 class="font-13 text-muted">'.$fetchRev['reviews'].'</h2></a>
                        <a class="like" href="questions.php?rev='.$fetchRev['id'].'" id="'.$fetchRev['id'].'">
                            <span class="badge btn-danger-light rounded-pill py-2 px-3">
                                <i class="fe fe-heart me-1"></i>0</span>
                        </a>
                        <span class="" id="">
                            <a href="reviews.php?rev='.$fetchRev['id'].'" id="'.$fetchRev['id'].'"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                        </span>
                    </div>
                </div>
            </div>';

                
        }
        echo $output;
    }
    }