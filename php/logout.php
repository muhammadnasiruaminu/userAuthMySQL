<?php
include_once "../config.php";

    session_start();

if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    header('location: ../forms/login.html');
}
