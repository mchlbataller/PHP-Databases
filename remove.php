<?php
require_once("services/database.php");

if (AuthenticationService::delete($_GET['email'])) {
    echo "Success! Going back to homepage...";
    echo <<<END
        <script>
            setTimeout(() => document.location.replace('/'), 3000);
        </script>
    END;
} else {
    echo "Failed. Please contact the administrator for more details.";
}
