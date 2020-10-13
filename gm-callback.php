<?php
    require_once __DIR__ . '/header.php';
    require_once __DIR__ . '/app/gm_setup.php';
    require_once __DIR__ . '/app/loginScript.php';

    // check if google is sending back a code

    if(isset($_GET['code'])) {
        $client->fetchAccessTokenWithAuthCode($_GET['code']);
        if ($client->getAccessToken()) {
            $_SESSION['google_access_token'] = $client->getAccessToken();
            $user = $client->verifyIdToken();
            var_dump($user);
            exit;

            // check if user has logged in before
          
        }
    }
    
?>