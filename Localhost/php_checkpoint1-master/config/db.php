<?php
// Configuration de mes constantes pour PDO
define("DSN", "mysql:host=localhost;dbname=checkpoint1");
define("USER", "root");
define("PASS", "nicolas");

// Connection avec PDO
$pdo = new PDO(DSN, USER, PASS);