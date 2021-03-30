<?php

class Odeca
{

    private $konekcija;
    private $naziv_tabele = "odeca";

    public $odeca_id;
    public $dizajner_id;
    public $kategorija_id;
    public $velicina;

    public function __construct($konekcija)
    {
        $this->konekcija = $konekcija;
    }


    public function vratiSve()
    {
        $sql = "SELECT * FROM " . $this->naziv_tabele . " 
        JOIN kategorija ON kategorija.kategorija_id = " . $this->naziv_tabele . ".kategorija_id 
        JOIN dizajner ON dizajner.dizajner_id = " . $this->naziv_tabele . ".dizajner_id";

        $odeca = [];
        $result = $this->konekcija->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($odeca, $row);
            }
        }
        return $odeca;
    }


    public function vratiOdecuDizajnera()
    {
        $sql = "SELECT * FROM " . $this->naziv_tabele . " JOIN kategorija ON kategorija.kategorija_id = " . $this->naziv_tabele . ".kategorija_id JOIN dizajner ON dizajner.dizajner_id = odeca.dizajner_id WHERE dizajner.dizajner_id = " . $this->dizajner_id;

        $odecaDizajnera = [];
        $result = $this->konekcija->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($odecaDizajnera, $row);
            }
        }
        return $odecaDizajnera;
    }

    public function ubaciNovuOdecuUBazu()
    {

        $sql = "INSERT INTO " . $this->naziv_tabele . " (dizajner_id, kategorija_id, velicina)
        VALUES ($this->dizajner_id,  $this->kategorija_id, '" . $this->velicina . "')";
        if ($this->konekcija->query($sql)) {
            return true;
        }
        return false;
    }

    public function izbrisiOdecuIzBaze()
    {
        $sql = "DELETE FROM " . $this->naziv_tabele . " WHERE odeca_id = " . $this->odeca_id;

        if ($this->konekcija->query($sql)) {
            return true;
        }
        return false;
    }
}
