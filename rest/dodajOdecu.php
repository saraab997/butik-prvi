<?php
require('../model/baza.php');
require('../model/Odeca.php');

$odeca = new Odeca($konekcija);
$odeca->dizajner_id = $_POST['dizajner_id'];
$odeca->kategorija_id = $_POST['kategorija_id'];
$odeca->velicina = $_POST['velicina'];

if ($odeca->ubaciNovuOdecuUBazu() == true) {
    echo "Uspesno ste ubacili novu odecu u bazu";
} else
    echo "Greska prilikom ubacivanja nove odece u bazu";
