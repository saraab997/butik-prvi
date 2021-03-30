<?php
require('../model/baza.php');
require('../model/Odeca.php');

$odeca = new Odeca($konekcija);

echo json_encode($odeca->vratiSve());
