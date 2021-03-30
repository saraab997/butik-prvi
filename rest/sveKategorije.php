<?php
require('../model/baza.php');
require('../model/Kategorija.php');

$kategorija = new Kategorija($konekcija);

echo json_encode($kategorija->vratiSve());
