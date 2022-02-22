<?php
session_start();
$_SESSION['sess_user_id'] = '';
$_SESSION['sess_user_prenom'] = '';
$_SESSION['sess_user_name'] = '';
$_SESSION['sess_user_fonction'] = '';
if (empty($_SESSION['sess_user_id'])) header("location: http://localhost/fidelizaou/index.php");
    