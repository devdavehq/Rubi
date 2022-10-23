<?php

include_once 'view.php';

if (isset($_POST['action']) && $_POST['action'] === 'searchForm') {
    $search = $user->validateInputs($_POST['search']);
    $sele = $user->validateInputs($_POST['sele']);

    $insertSearch = $user->InsertSearch($grabuser['id'], $grabuser['uniId'], $search);

    if (!empty($sele) && $sele == 'Videos') {

        $fetchVideos = $user->FetchVideos($search);
        if ($fetchVideos && $fetchVideos != null) {
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
            $output = "<h2>No Videos Found With That Name</h2>";
            echo $output;
        }
    }


    if (!empty($sele) && $sele == 'Channels') {
        $fetchChannels = $user->FetchChannel($search);
        if ($fetchChannels && $fetchChannels != null) {
            foreach ($fetchChannels as $fetchChannel) {
                // $fetchSubs = $user->GetSubbedChannel($grabuser['id'], 'subscribed');
                if ($fetchChannel['subscribers'] <= 999) {
                    $subs = '';
                }
                if ($fetchChannel['subscribers'] >= 1000) {
                    $subs = 'K';
                }
                if ($fetchChannel['subscribers'] >= 100000) {
                    $subs = 'M';
                }
                if ($fetchChannel['verified'] === 0) {
                    $verified = '';
                } else {
                    $verified = 'check-circle';
                }



                // $subscribeBtn = '<a href="explore.php?channel=' . $fetchChannel['channel_id'] . '" class="btn btn-default text-primary subscribe unsubscribe
                // " id="' . $fetchChannel['channel_id'] . '">Unsubscribe <i class="fa fa-qq text-primary"></i></a>';


                // $subscribeBtn = '<a href="explore.php?channel=' . $fetchChannel['channel_id'] . '" class="btn btn-primary text-light subscribe subscription" id="' . $fetchChannel['channel_id'] . '">
                // subscribe <i class="fa fa-qq"></i></a>';

                $output .= '
                        <div class="card channel">
                        <span id="substatus"></span>
                        <div class="card-body d-flex Subscriptions">
                            <div class="d-flex">
                                <img src="../../media/images/' . $fetchChannel['channel_image'] . '" alt="" class="rounded" width="70px" height="70px">
                                <div class="d-flex subs">
                                    <a href="explore.php?channel=' . $fetchChannel['channel_id'] . '"  class="text-light mt-3 creator-name">' . $fetchChannel['channel_name'] . '<i class="fa fa-' . $verified . ' text-primary verified"></i></a>
                                    <p class="text-default">subscribers ' . $fetchChannel['subscribers'] . $subs . '</p>
                                </div>
                            </div> 
                                <div class="sub-btn">
                                    <button href="explore.php?channel=' . $fetchChannel['channel_id'] . '"  class="btn btn-default text-primary subscribe unsubscribe d-none" id="' . $fetchChannel['channel_id'] . '">Unsubscribe <i class="fa fa-qq text-primary"></i></button>
                                
                                    <button href="explore.php?channel=' . $fetchChannel['channel_id'] . '" class="btn btn-primary text-light subscribe subscription" id="' . $fetchChannel['channel_id'] . '">subscribe <i class="fa fa-qq"></i></button>
                                   
                                </div>
                        </div>
                    </div>';
            }
            echo $output;
        } else {
            $output = "<h2>No Channel Found With That Name</h2>";
            echo $output;
        }
    }
}



// `id`, `channel_id`, `channel_name`, `channel_email`, `channel_image`, `subscribers`, `verified`, `disabled`, `deleted`, `datereated`
