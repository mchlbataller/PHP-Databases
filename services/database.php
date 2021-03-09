<?php

/**
 * ### Establish a new connection to the MySQL server
 */
function sql()
{
    $sql = new PDO("mysql:host=localhost;dbname=web", 'root', '');
    return $sql;
}

class AuthenticationService
{
    public static function createTable()
    {
        try {
            // Create a new table.
            sql()->query("CREATE TABLE `web`.`test` ( `_id` INT NOT NULL AUTO_INCREMENT, `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`_id`)) ENGINE = InnoDB;");
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function register($email, $password)
    {
        try {
            sql()->query("INSERT INTO web.test (email, password) VALUES ('$email', '$password')");

            header("location: index.php?register=true");
        } catch (Exception $e) {
            echo $e;

            return false;
        }
    }

    public static function login($email, $password)
    {
        try {
            $login = sql()->query("SELECT * FROM web.test WHERE email='$email' AND password='$password'");

            foreach($login as $item) {
                echo $item[1];
                if($item[1]) {
                    header("location: index.php?login=true");
                } 
            }
        } catch (Exception $e) {
            echo $e;

            return false;
        }
    }

    public static function view()
    {
        $query = sql()->query("SELECT * FROM web.test");

        return $query;
    }

    public static function delete($email)
    {
        try {
            sql()->query("DELETE FROM web.test WHERE email='$email'");

            return true;
        } catch (Exception $e) {
            echo $e;

            return false;
        }
    }

    public static function update($id, $email, $password) {
        try {
            sql()->query("UPDATE web.test SET email='$email', password='$password' WHERE _id='$id'");

            return true;
        } catch (Exception $e) {
            echo $e;

            return false;
        }

    }
}
