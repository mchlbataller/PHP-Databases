<?php
/** 
 * This file will be used for quick references
 * regarding the SQL functions
 */

die("You can't go here.");

// Establish a new connection to the MySQL server
$sql = new PDO("mysql:host=localhost;dbname=web", 'root', '');

// Create a new table.
$sql->query("CREATE TABLE `web`.`test` ( `_id` INT NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`_id`)) ENGINE = InnoDB;");