<?php
session_start();

if (isset($_GET['action']) && $_GET['action'] === 'login') {
    require 'controllers/authController.php';
} else {
    require 'views/homeView.php';
}

