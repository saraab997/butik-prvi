<?php
require('../model/baza.php');
require('../model/Dizajner.php');

$dizajner = new Dizajner($konekcija);

echo json_encode($dizajner->vratiSve());
