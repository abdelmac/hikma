<?php

define('HOST', 'localhost');
define('DB_NAME', 'dbxxxovuu7vgmb');
define('USER', 'root');
define('PASS', 'root');


try {
    $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME . ";port=3301", USER, PASS);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessage(); // Output the error message
}


?>
