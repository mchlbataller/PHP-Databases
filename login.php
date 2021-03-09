<?php
require_once("services/database.php");


if (!isset($_POST)) {
    die("There is an error with your request.");
}

if (AuthenticationService::login($_POST['email'], $_POST['password'])) {
    echo "Success! Going back to homepage...";
    echo <<<END
        <script>
            setTimeout(() => document.location.replace('/'), 1000);
        </script>
    END;
} else {
    echo "Login Failed. Please try again.";
}
