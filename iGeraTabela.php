<?php
// interface da class GeraTabela

interface iGeraTabela {
  private const a = 3; // constante 3 para multiplicar numero de vitorias

  public function somaPontos($vitorias, $empates);
  public function cDiffGolos($golosMarcados, $golosSofridos);
  public function ordenaPontos($dados, $campo, $ordem = "ASC"); // $dados, $campo que pretende ordenar, $ordem (Decrscente ou Default = Crescente)
}

?>
