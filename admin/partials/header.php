<!-- in this page is the header which is used in almost all the other pages-->

<?php
require '../partials/header.php';

// check login status
if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
    die();
}
