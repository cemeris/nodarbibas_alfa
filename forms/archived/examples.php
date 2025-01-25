<?php


/**
 * PANKŪKAS
 */
{
  // gatavošanas darbība
  pagavotPankukas(1); // 8 pankūkas
  pagavotPankukas(3); // rezultātā vēlamies 24 pankūkas

  /**
   * Instrukcija kā pagatavot pankūkas
   */
  function pagavotPankukas($daudzuma_koificients) {
    $olas = 1 * $daudzuma_koificients;
    $piens = 0.25 * $daudzuma_koificients;
    $milti = 150 * $daudzuma_koificients;

    $olu_skidrums = izsist($olas);
    $skidra_masa = samaisit($piens, $olu_skidrums);

    $gatava_mikla = samaisit($skidra_masa, $milti); // gatava_mikla

    return cepjMikluUzPannas($gatava_mikla); // gatavas pankukas
  }
}

/**
 * SKAPJA SALIKSANA
 */

{
  $skapja_detalas = (object) [];

  saliktSkapi($skapja_detalas); // Salikts skapis
  
  function saliktSkapi($detalas) {
    $izpakotas_detalas = izpakot($detalas);
  
    $shema = "abcfd";
  
    return salikt($shema, $izpakotas_detalas);
  }
}

/**
 * 
 */

$n1 = "a";
$n2 = "b";
$n3 = $n2;


print(concatString($n2, "c"));

function concatString($a, $b) {
  return $a . $b;
}








