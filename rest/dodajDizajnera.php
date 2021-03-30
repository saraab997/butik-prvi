<?php
require('../model/baza.php');
require('../model/Dizajner.php');

$dizajner = new Dizajner($konekcija);
$dizajner->ime_prezime = $_POST['ime_prezime'];
$dizajner->poznat_kao = $_POST['poznat_kao'];
$dizajner->o_dizajneru = $_POST['o_dizajneru'];

if ($dizajner->ubaciNovogDizajneraUBazu() == true) {
    echo "Uspesno ste ubacili novog dizajnera u bazu";
} else
    echo "Greska prilikom ubacivanja novog dizajnera u bazu";
