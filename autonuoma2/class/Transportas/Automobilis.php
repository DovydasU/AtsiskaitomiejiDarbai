<?php

namespace Transportas;

class Automobilis extends Transportas implements ITransportas
{
  use TransportoIsvedimas;

  protected function aprasymasTrumpas()
  {
    $aprasymas = $this->kuras . ", ";
    $aprasymas .= $this->spalva . ", ";
    $aprasymas .= $this->transmisija;

    return $aprasymas;
  }

  protected function tekstasSavybes()
  {
    $sablonas = "<tr><td>%s</td><td>%s</td></tr>";

    $tekstas = '<table class="table table-striped-columns">';
    $tekstas .= sprintf($sablonas, "Markė", $this->marke);
    $tekstas .= sprintf($sablonas, "Modelis", $this->modelis);
    $tekstas .= sprintf($sablonas, "Metai", $this->metai);
    $tekstas .= sprintf($sablonas, "Kuro tipas", $this->kuras);
    $tekstas .= sprintf($sablonas, "Spalva", $this->spalva);
    $tekstas .= sprintf($sablonas, "Transmisija", $this->transmisija);
    // $tekstas .= sprintf($sablonas, "Kaina", $this->tekstasKaina());
    $tekstas .= '</table>';

    return $tekstas;
  }

}
