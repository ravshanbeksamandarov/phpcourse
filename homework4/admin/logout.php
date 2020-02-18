<?php
    include 'core/check.php';

    unset($_SESSION['user_data']);

    header('Location: index.php');