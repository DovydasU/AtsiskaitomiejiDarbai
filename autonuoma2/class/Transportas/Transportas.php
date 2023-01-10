<?php
namespace Transportas;

trait TransportoIsvedimas
{
    public function isvedimasKatalogui()
    {
      echo '<div class="card">
        ' . $this->tekstasPaveiksliukas("card-img-top") . ' 
        <div class="card-body">
          <h5 class="card-title">' . $this->pavadinimas . '</h5>
          <p class="card-text">
            ' . $this->aprasymasTrumpas() . '<br>
            Kaina: <b>' . $this->tekstasKaina() . '</b>
          </p>
          <a href="' . $this->getLink() . '" class="btn btn-primary">Plačiau...</a>
        </div>
      </div>';
    }
  
    public function isvedimasPilnas()
    {
      echo '<h3>' . $this->pavadinimas . '</h3>';
      echo '<div class="row">';
      echo '<div class="col-lg-6 text-center mb-2">';
      // echo '<img src="' . $this->paveiksliukas . '" class="img-thumbnail img-fluid w-100" alt="' . $this->pavadinimas . '">';
      echo $this->tekstasPaveiksliukas("img-thumbnail img-fluid w-100");
      echo '<div class="mt-2 card"><div class="card-body">Kiana: <b>' . $this->tekstasKaina() . '</b></div></div>';
      echo '</div>';
      echo '<div class="col-lg-6 mb-2">';
      echo $this->tekstasSavybes();
      echo '</div>';
      echo '</div>';
    }  
    
    public function __toString()
    {
      $isvedimas = $this->marke . " " . $this->modelis;
      $isvedimas .= " (" . $this->aprasymasTrumpas() . ")";

      return $isvedimas;
    }
}

?>