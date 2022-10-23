<?php

include_once 'view.php';

if (isset($_POST['subscribe'])) :
    $subId = $_POST['subscribe'];
    $Substatus = 'subscribed';

    $fSC = $user->FetchSubscribedChannel($subId);
    if ($fSC['channel_id'] === $grabuser['id'] || $fSC['channel_name'] === $grabuser['uniId']) :
        echo "impossible";
    else :
        $subscribe = $user->UserSubscribe($fSC['id'], $fSC['channel_name'], $fSC['channel_image'], $fSC['subscribers'], $fSC['verified'], $grabuser['id'], $grabuser['uniId'], $Substatus);
        if ($subscribe) :
            $fetchSubs = $user->GrabSubs($fSC['channel_id'], 'subscribed');

            if ($fetchSubs) :
                // echo 'yeah';
                print_r($fetchSubs);
            //     $data = count($fetchSubs);
            //     $insertsubs = $user->InsertSubs($fSC['channel_id'], $data);
            //     if ($insertsubs) :
            //         echo 'Subscribed';
            //         $_SESSION['channel'] = $fSC['channel_id'];
            //         $_SESSION['user'] = $grabuser['id'];
            //     else :
            //         echo 'Subscription Failed';
            //     endif;
            endif;
        else :
            echo 'Subscription Failed';
        endif;
        
    endif;

endif;

if (isset($_POST['action']) && $_POST['action'] === 'FetchAllSubs') :

    $Substatus = 'subscribed';
    $fetchSubs = $user->VerifySubscribedChannel($grabuser['id'], 'subscribed');

    if ($fetchSubs) :
        // foreach ($fetchchans as  $fetchchan) :
        foreach ($fetchSubs as  $fetchSub) :
            if ($fetchSub['subscribers'] <= 999) {
                $subs = '';
            }
            if ($fetchSub['subscribers'] >= 1000) {
                $subs = 'K';
            }
            if ($fetchSub['subscribers'] >= 100000) {
                $subs = 'M';
            }
            if ($fetchSub['verified'] === 0) {
                $verified = '';
            } else {
                $verified = 'check-circle';
            }
            $output .= '
                    <div class="col-xl-3 col-sm-6 col-md-6">
                    <div class="card border p-0 mt-9">
                        <div class="card-body text-center">
                            <img class="avatar avatar-xxl brround cover-image" src="../../media/images/' . $fetchSub['channel_image'] . '" style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;">
                            <div class="d-flex subs">
                                <a href="" class="text-light mt-3 creator-name">' . $fetchSub['channel_name'] . '<i class="fa fa-' . $verified . ' text-primary verified"></i></a>
                                <p class="text-default">subscribers ' . $fetchSub['subscribers'] . $subs . '</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="' . $fetchSub['channel_id'] . '" class="text-light btn btn-primary increase unsubscribe" id="' . $fetchSub['channel_id'] . '">unsubscribe</a>
                        </div>
                    </div>
                </div>';
        // break 2;
        endforeach;

        echo $output;
    else :
        $output = '<h1 class="mt-8 text-primary">No subscriptions yet</h1>';
        echo $output;
    endif;

endif;


if (isset($_POST['action']) && $_POST['action'] === 'FetchNotifiedSubs') :

    $Substatus = 'subscribed';
    $fetchSubs = $user->VerifySubscribedChannel($grabuser['id'], 'subscribed');

    if ($fetchSubs) :
        // foreach ($fetchchans as  $fetchchan) :
        foreach ($fetchSubs as  $fetchSub) :
            if ($fetchSub['verified'] === 0) {
                $verified = '';
            } else {
                $verified = 'check-circle';
            }
            $output .= '
             <a class="dropdown-item d-flex notificate" href="index.php?noyify='.$fetchSub['channel_id'].'" id="'.$fetchSub['channel_id'].'">                                   
                                               
            <img src="../../media/images/'.$fetchSub['channel_image'].'" class="img-fluid" style="width:40px;height:40px;border-radius:50px";>
                                                            
                    <div class="mt-1 wd-80p">
                        <h5 class="notification-label mb-1" >
                            '.$fetchSub['channel_name'].'<i.fa-fa-'.$verified.'
                            </h5><br>
                        <span class="notification-subtext">'.date('F j, Y, g:i a',strtotime($fetchSub['datesubscribed'])).'</span>
                    </div>  
            </a>';                                                                                                                                                    
                                                        
                  
        endforeach;

        echo $output;
    else :
        $output = 'No subscriptions yet';
        echo $output;
    endif;

endif;

if (isset($_POST['action']) && $_POST['action'] === 'FetchVerifiedSubs') :

    $Substatus = 'subscribed';
    $fetchSubs = $user->GetSubbedChannel($grabuser['id'], 'subscribed');

    if ($fetchSubs && $fetchSubs != null) :
        echo 'Successfull';
    else :
        echo 'Not Successful';
    endif;

endif;



// `id`, `channel_id`, `channel_name`, `channel_email`, `channel_image`, `subscribers`, `verified`, `disabled`, `deleted`, `datereated`