<?php
if (@session_start() == false) {
    session_start();
    if (!isset($_SESSION["userName"])) {
        header('location: ../PresentationAdmin/login.php');
    }
} else {
    if (!isset($_SESSION["userName"])) {
        header('location: ../PresentationAdmin/login.php');
    } else {
        unset($_SESSION["userName"]);
        header('location: ../PresentationAdmin/login.php');
    }
}

