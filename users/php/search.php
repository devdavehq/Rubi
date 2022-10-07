<?php

include_once 'view.php';

if (isset($_POST['action']) && $_POST['action'] === 'searchForm') 
{
    $search = $user->validateInputs($_POST['search']);

    $insertSearch = $user->InsertSearch($grabuser['id'], $grabuser['uniId'], $search);

    $fetchVideos = $user->FetchVideos($search);
    $fetchChannels = $user->FetchChannel($search);

    if ($search == $fetchVideos['videos']) {
        foreach ($fetchVideos as $fetchVideo) {
            if (empty($fetchVideo[''])) {
                $codes = 'code Unavaliable';
            }else{
                $codes = 'code avaliable';
            }
            $output .= '
            <div class="col-xl-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="'.$fetchVideo['thumbnail'].'" alt="Title">
                <div class="card-body">
                    <h4 class="card-title text-light">'.$fetchVideo['title'].'</h4>
            
                    <div class="d-flex">
                        <img src="'.$fetchVideo['channel_img'].'" alt="" class="rounded" width="40px" height="40px">
                        <a href="explore.php?video='.$fetchVideo['channelid'].'" class="text-light mt-3 creator">'.$fetchVideo['channelid'].'</a>
                    </div>
                    <a  href="explore.php?video='.$fetchVideo['id'].'" class="card-title btn btn-primary mt-2 increase" data-bs-toggle="modal" data-bs-target="#extralargemodal">
                        Watch now
                    </a>
                </div>
                <div class="card-footer">
                    <div class="d-flex codeAvail">
                        2 min ago
                    <div class="text-center text-light bg-primary font">'.$codes.'</div>
                </div>
                </div>
            </div>
        </div>';
                
        }
        echo $output;
    }
    if ($search == $fetchChannels['channel_name']) {
        foreach ($fetchChannels as $fetchChannel) {
            if (count($fetchChannel['subscribers']) >= 1000) {
                $subs = count($fetchChannel['subscribers']) . 'K';
            }
            if (count($fetchChannel['subscribers']) >= 100000) {
                $subs = count($fetchChannel['subscribers']) . 'M';
            }
            if ($fetchChannel['verified'] === 0) {
                $verified = '';
            } else {
                $verified = 'check-circle';
            }

            $output .= '
                        <div class="card channel">
                        <div class="card-body d-flex Subscriptions">
                            <div class="d-flex">
                                <img src="' . $fetchChannel['channel_image'] . '" alt="" class="rounded" width="70px" height="70px">
                                <div class="d-flex subs">
                                    <a href="explore.php?channel=' . $fetchChannel['channelid'] . '"  class="text-light mt-3 creator-name">' . $fetchChannel['channelid'] . '<i class="fa fa-' . $verified . ' text-primary verified"></i></a>
                                    <p class="text-default">subscribers ' . $subs . '</p>
                                </div>
                            </div> 
                                <div class="sub-btn">
                                    <a href="explore.php?channel=' . $fetchChannel['userid'] . '" class="btn btn-primary text-light subscribe">subscribe <i class="fa fa-qq"></i></a>
                                    <a href="explore.php?channel=' . $fetchChannel['userid'] . '" class="btn btn-primary text-default subscribe" style="display:none;">Unsubscribe <i class="fa fa-qq text-primary"></i></a>
                                </div>
                        </div>
                    </div>';
        }
        echo $output;
    }
}
