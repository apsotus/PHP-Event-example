<?php

    Event::listen('login', function(){
        echo 'User has been logged in!\n';
    });

    Event::listen('logout', function(){
        echo 'User has been logout in!\n';
    });