<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Website</title>
    <style>
        * {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>Welcome to my First Website! </h1>
    <h2>Login</h2>
    <?php
    if (isset($_GET['login'])) {
        echo "Successfully logged in.";
    }
    ?>
    <form method="POST" action="/login.php">
        <input type="text" id="email" placeholder="Email" name="email" />
        <input type="text" id="password" placeholder="Password" name="password" />
        <button type="submit">Submit</button>
    </form>


    <h2>Register for an account </h2>
    <?php if (isset($_GET['register'])) {
        echo ($_GET['register'] == 'true') ? "Successfully registered your account." : "Registration failed.";
    } ?>
    <form method="POST" action="/register.php">
        <input id="email" name="email" placeholder="Email" />
        <input id="password" name="password" placeholder="Password" />
        <button type="submit">Submit </button>
    </form>


    <h2>User Manager</h2>
    <?php
    require_once("services/database.php");


    foreach (AuthenticationService::view() as $row) {
        echo "<form method='POST' action='/update.php'>";
        echo "<input type='hidden' name='id' value='$row[0]' />";
        echo "<input type='text' placeholder='$row[1]' name='email'/>";
        echo "<input type='text' placeholder='$row[2]' name='password'/>";
        echo '<input type="submit">';
        echo "<button onclick=\"document.location.replace('/remove.php?email=$row[1]')\"> Delete </button>";
        echo "</form>";
    }
    ?>

</body>

</html>