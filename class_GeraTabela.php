<?php
require_once("iGeraTabela.php");

class geraTabela implements iGeraTabela {

  private const $a = 3;

  public function somaPontos($vitorias, $empates){

    return ($vitorias * $this->a)+$empates;
  }

  public function cDiffGolos($golosMarcados, $golosSofridos){

    return ($golosMarcados - $golosSofridos);
  }

public function ordenaPontos($dados, $campo, $ordem = "ASC" /* Crescente Defaut */ ){
    // ordena dados pelo campo x pela ordem y (Crescente ou Decrescente)
    // neste caso ordena se pelo campo pontos



  }

}

?>
