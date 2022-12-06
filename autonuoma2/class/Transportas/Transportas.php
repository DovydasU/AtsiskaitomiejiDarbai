<?php

namespace Transportas;

abstract class Transportas
{
    protected $id;
    protected $marke;
    protected $modelis;
    protected $metai;
    protected $spalva;
    protected $kuras;
    protected $transmisija;
    protected $paveiksliukas;
    protected $kaina;
    protected $pavadinimas;

    public function __construct($data)
    {
        $this->id = $data["id"];
        $this->marke = $data["marke"];
        $this->modelis = $data["modelis"];
        $this->metai = $data["metai"];
        $this->spalva = $data["spalva"];
        $this->kuras = $data["kuras"];
        $this->transmisija = $data["transmisija"];
        $this->paveiksliukas = $data["image"];
        $this->kaina = $data["kaina"];

        $this->pavadinimas = $this->marke . " " . $this->modelis . " (" . $this->metai . ")";
    }

    abstract protected function aprasymasTrumpas();

    abstract protected function tekstasSavybes();


    protected function tekstasKaina()
    {
        return number_format($this->kaina, 2, ",", "") . " &euro;/val.";
    }

    protected function tekstasPaveiksliukas($html_class = "")
    {
        $sablonas = '<img src="%s" class="%s" alt="%s">';
        return sprintf($sablonas, $this->paveiksliukas, $html_class, $this->pavadinimas);
    }

    protected function getLink()
    {
        return "?auto=" . $this->id;
    }
}
