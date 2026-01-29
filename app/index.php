<?php
$mysqli = new mysqli("mysql", "root", "rootpass", "testdb");

if ($mysqli->connect_error) {
    die("Erreur MySQL : " . $mysqli->connect_error);
}
echo "<h1>TP Kubernetes LAMP</h1>";
echo "<p>Connexion MySQL réussie 🎉</p>";
?>

