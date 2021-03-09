<?php
require_once("services/database.php");

if(!isset($_GET['email'])) {
    die("There is an error with your request.");
}

if (AuthenticationService::delete($_GET['email'])) {
    echo "Success! Going back to homepage...";
    echo <<<END
        <script>
            setTimeout(() => document.location.replace('/'), 1000);
        </script>
    END;
} else {
    echo "Failed. Please contact the administrator for more details.";
}
