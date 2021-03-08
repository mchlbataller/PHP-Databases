<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/register.php">
        <input id="email" name="email" placeholder="Email" />
        <input id="password" name="password" placeholder="Password" />
        <button type="submit">Submit </button>
    </form>


    <p>Accounts </p>
    <?php
        require_once("services/database.php");

        foreach (AuthenticationService::view() as $row) {
            echo $row['email'];
        }
        
    ?>
</body>

</html>