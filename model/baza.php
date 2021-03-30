<?php
$nazivServera = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "butik";

$konekcija = new mysqli($nazivServera, $dbUsername, $dbPass, $dbName);

if ($konekcija->connect_error) {
    die("Greska prilikom konekcije: " . $konekcija->connect_error);
}
