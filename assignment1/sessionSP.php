<?php
    session_start();
    if (!$_SESSION["cart"]){
        $_SESSION["cart"] = [];
    }