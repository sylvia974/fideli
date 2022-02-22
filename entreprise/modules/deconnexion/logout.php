<?php
session_start();
$_SESSION['sess_user_id'] = '';
$_SESSION['sess_user_nom'] = '';
$_SESSION['sess_user_Role'] = '';
if (empty($_SESSION['sess_user_id'])) header("location: http://localhost/fidelizaou/entreprise/index.php");
    