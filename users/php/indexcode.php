<?php

include_once 'view.php';

if (isset($_POST['action']) && $_POST['action'] === 'FetchReadyPosts') 
{

    $fetchVideos = $user->FetchAllVideos();
    if ($fetchVideos && !empty($fetchVideos)) {
        foreach ($fetchVideos as $fetchVideo) {
            if (empty($fetchVideo['codes'])) {
                $codes = 'code Unavaliable';
            } else {
                $codes = 'code avaliable';
            }
            $output .= '
            <div class="col-xl-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="' . $fetchVideo['thumbnail'] . '" alt="Title">
                <div class="card-body">
                    <h4 class="card-title text-light">' . $fetchVideo['title'] . '</h4>
            
                    <div class="d-flex">
                        <img src="' . $fetchVideo['channel_img'] . '" alt="" class="rounded" width="40px" height="40px">
                        <a href="explore.php?video=' . $fetchVideo['channelid'] . '" class="text-light mt-3 creator">' . $fetchVideo['channelid'] . '</a>
                    </div>
                    <a  href="explore.php?video=' . $fetchVideo['id'] . '" class="card-title btn btn-primary mt-2 increase" data-bs-toggle="modal" data-bs-target="#extralargemodal">
                        Watch now
                    </a>
                </div>
                <div class="card-footer">
                    <div class="d-flex codeAvail">
                        2 min ago
                    <div class="text-center text-light bg-primary font">' . $codes . '</div>
                </div>
                </div>
            </div>
        </div>';
        }
        echo $output;
    } else {
        $output = '<h3 class="text-primary">No videos for you here</h3>';
        echo $output;
    }
}

// fetch videos recommended from search
if (isset($_POST['action']) && $_POST['action'] === 'FetchSearchedPosts') :

    $FetchSearch =$user->FetchSearch($grabuser['uniId']);
    $fetchVideos = $user->FetchVideos($FetchSearch['search']);
    if ($fetchVideos && !empty($fetchVideos)) :
         foreach ($fetchVideos as $fetchVideo) :
                if (empty($fetchVideo['codes'])) {
                    $codes = 'code Unavaliable';
                } else {
                    $codes = 'code avaliable';
                }
                $output .= '
                <div class="col-xl-3 col-md-6">
                <div class="card">
                    <img class="card-img-top" src="' . $fetchVideo['thumbnail'] . '" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title text-light">' . $fetchVideo['title'] . '</h4>
                
                        <div class="d-flex">
                            <img src="' . $fetchVideo['channel_img'] . '" alt="" class="rounded" width="40px" height="40px">
                            <a href="explore.php?video=' . $fetchVideo['channelid'] . '" class="text-light mt-3 creator">' . $fetchVideo['channelid'] . '</a>
                        </div>
                        <a  href="explore.php?video=' . $fetchVideo['id'] . '" class="card-title btn btn-primary mt-2 increase" data-bs-toggle="modal" data-bs-target="#extralargemodal">
                            Watch now
                        </a>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex codeAvail">
                            2 min ago
                        <div class="text-center text-light bg-primary font">' . $codes . '</div>
                    </div>
                    </div>
                </div>
            </div>';
        endforeach;
        echo $output;
    else :
        $output = '<h3 class="text-primary">No videos for you here</h3>';
        echo $output;
    endif;

endif;











if (isset($_POST['gtnval'])) 
{
    $value = $_POST['gtnval'];

    $datas = $user->FetchVideos($value);
    if ($datas && !empty($datas)) {
        foreach ($datas as $data) {
            if (empty($data['codes'])) {
                $codes = 'code Unavaliable';
            } else {
                $codes = 'code avaliable';
            }
            if ($data['verified'] === 0) {
                $verified = '';
            } else {
                $verified = 'check-circle';
            }
            $output .= '
        <div class="col-xl-3 col-md-6">
        <div class="card">
            <img class="card-img-top" src="' . $data['thumbnail'] . '" alt="Title">
            <div class="card-body">
                <h4 class="card-title text-light">' . $data['title'] . '</h4>
        
                <div class="d-flex">
                    <img src="' . $data['channel_img'] . '" alt="" class="rounded" width="40px" height="40px">
                    <a href="explore.php?video=' . $data['channelid'] . '" class="text-light mt-3 creator">' . $data['channelid'] . '<i class="fa fa-' . $verified . ' text-primary verified"></i></a>
                </div>
                <a  href="explore.php?video=' . $data['id'] . '" class="card-title btn btn-primary mt-2 increase" data-bs-toggle="modal" data-bs-target="#extralargemodal" id="watchNow">
                    Watch now
                </a>
            </div>
            <div class="card-footer">
                <div class="d-flex codeAvail">
                    2 min ago
                <div class="text-center text-light bg-primary font">' . $codes . '</div>
            </div>
            </div>
        </div>
    </div>';
        }
        echo $output;
    } else {
        $output = '<h3 class="text-primary">no videos for you here</h3>';
        echo $output;
    }
}


if (isset($_POST['action']) && $_POST['action'] === 'getAllTags') 
{
    // $fetchUserSearch = $user->FetchSearch($grabuser['uniId']);
    $fetchCat = $user->FetchCat();

    if ($fetchCat && !empty($fetchCat['category'])) 
    {
        foreach ($fetchCat as $cat) {
            $output .= '
                <li class="nav-item">
                    <a class="nav-link recent" data-bs-toggle="tab" href="#linkpills">'.$cat['category'].'</a>
                </li>';
            
        }
        echo $output;
    }else {
        $output = '<h4 class="text-primary">no Category for you yet</h4>';
        echo $output;
    }
}