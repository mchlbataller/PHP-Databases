<?php
require_once("services/database.php");

if (isset($_POST)) {
    AuthenticationService::register($_POST['email'], $_POST['password']);
}
