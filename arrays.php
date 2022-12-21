<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => "Klant");

$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[product]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "Kris",
  "functie" => "Directeur Webshop beheer"
);

$korting["product"] = str_replace(
  "[[product]]",
  "chocola",
  $korting["product"]
);

$aanbieding = array_merge(
  $aanhef,
  $korting,
  $ondertekening
);

echo "<pre>";
var_dump( $aanhef, "<br>",
$korting, "<br>",
$ondertekening);
echo "</pre>";


/*
 * Opdracht 1: DONE
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()
 */

/*
 * Opdracht 2: DONE
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */

/*
 * Opdracht 3: DONE
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */

/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */

/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */
