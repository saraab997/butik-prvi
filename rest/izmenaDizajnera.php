<?php
require('../model/baza.php');
require('../model/Dizajner.php');

$dizajner = new Dizajner($konekcija);
$dizajner->dizajner_id = $_POST['dizajner_id'];
$dizajner->ime_prezime = $_POST['ime_prezime'];
$dizajner->poznat_kao = $_POST['poznat_kao'];
$dizajner->o_dizajneru = $_POST['o_dizajneru'];

if ($dizajner->izmeniDizajnera() == true) {
    echo "Uspesno ste izmenili dizajnera";
} else
    echo "Greska prilikom izmene dizajnera";
