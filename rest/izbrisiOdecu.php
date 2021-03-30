<?php
require('../model/baza.php');
require('../model/Odeca.php');

$odeca = new Odeca($konekcija);
$odeca->odeca_id = $_POST['odeca_id'];
if ($odeca->izbrisiOdecuIzBaze() == true)
    echo "Uspesno obrisana odeca iz baze";
else echo "Greska prilikom brisanja odece iz baze";
