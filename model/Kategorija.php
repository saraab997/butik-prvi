<?php

class Kategorija
{

    private $konekcija;
    private $naziv_tabele = "kategorija";

    public $kategorija_id;
    public $naziv;

    public function __construct($konekcija)
    {
        $this->konekcija = $konekcija;
    }

    public function vratiSve()
    {
        $sql = "SELECT * FROM " . $this->naziv_tabele;

        $kategorije = [];
        $result = $this->konekcija->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($kategorije, $row);
            }
        }
        return $kategorije;
    }
}
