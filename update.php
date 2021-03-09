<?php
require_once("services/database.php");

if(!isset($_POST['email'], $_POST['password'])) {
    die("There is an error with your request.");
}

if (AuthenticationService::update($_POST['id'], $_POST['email'], $_POST['password'])) {
    echo "Success! Going back to homepage...";
    echo <<<END
        <script>
            setTimeout(() => document.location.replace('/'), 1000);
        </script>
    END;
} else {
    echo "Failed. Please contact the administrator for more details.";
}
