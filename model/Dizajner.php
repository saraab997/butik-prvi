<?php

class Dizajner
{

    private $konekcija;
    private $naziv_tabele = "dizajner";

    public $dizajner_id;
    public $ime_prezime;
    public $poznat_kao;
    public $o_dizajneru;

    public function __construct($konekcija)
    {
        $this->konekcija = $konekcija;
    }



    public function vratiSve()
    {
        $sql = "SELECT * FROM " . $this->naziv_tabele;

        $dizajneri = [];
        $result = $this->konekcija->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($dizajneri, $row);
            }
        }
        return $dizajneri;
    }

    public function ubaciNovogDizajneraUBazu()
    {

        $sql = "INSERT INTO " . $this->naziv_tabele . " (ime_prezime, poznat_kao, o_dizajneru)
        VALUES ('" . $this->ime_prezime . "',  '" . $this->poznat_kao . "', '" . $this->o_dizajneru . "')";
        if ($this->konekcija->query($sql)) {
            return true;
        }
        return false;
    }

    public function izmeniDizajnera()
    {
        $sql = "UPDATE " . $this->naziv_tabele . "
                SET ime_prezime = '" . $this->ime_prezime . "',
                 poznat_kao = '" . $this->poznat_kao . "',
                 o_dizajneru = '" . $this->o_dizajneru . "'
                WHERE dizajner_id = " . $this->dizajner_id;

        $result = $this->konekcija->query($sql);
        if ($result != false) {
            return true;
        }
        return false;
    }
}
