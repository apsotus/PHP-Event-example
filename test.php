<?php

require_once 'Event.php';
require_once 'User.php';
require_once  'Listener.php';


    $user = new User();
    $user->login();
    if($user->login()) {
        Event::trigger('login');
    }
    