<?php
require('../model/baza.php');
require('../model/Odeca.php');

$odeca = new Odeca($konekcija);
$odeca->dizajner_id = $_GET['dizajner_id'];

echo json_encode($odeca->vratiOdecuDizajnera());
