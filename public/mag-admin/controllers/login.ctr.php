<?php

    session_start();

    if(isset($_POST['login_admin']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        // if(isset($_POST['remember_me']))
        // {
        //     $_COOKIE['remember_me'];
        // }


        $loginModel = new Login($username, $password);
        $loginModel->login_admin();
    }
