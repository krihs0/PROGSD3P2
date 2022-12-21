<?php

/*
 * Opdracht 1:Done
 * Maak de $weekdagen array af zodat alle dagen van de week erin staan
 * Voor de key en value gebruik je kleine letters, geen hoofdletters
 */

/*
 * Opdracht 2:Done
 * Gebruik een loop om van alle elementen van je array de waarde te tonen op het scherm
 * Gebruik hiervoor een echo statement dus geen print_r of var_dump.
 */

/*
 * Opdracht 3:Done
 * Wijzig alle waardes in je array met behulp van een loop en een switch
 * Alle waardes moeten beginnen met een hoofdletter. Bij 'za' en 'zo' moeten de waardes
 * van de dagen geheel uit hoofdletters bestaan.
 * Gebruik hiervoor de juiste functies
 */

/*
 * Opdracht 4:
 * Maak een nieuwe array en noem deze $omgekeerd.
 * De inhoud van deze array bestaat uit de elementen van de weekdagen array.
 * Gebruik hiervoor een for loop en array_push() om deze elementen te kopieren naar de nieuwe array
 * HINT: de grootte van een array kun je met sizeof() en count() bepalen
 */

/*
 * Opdracht 5:
 * Gebruik de functie array_reverse om hetzelfde resultaat als in opdracht 4 te verkrijgen.
 */

$weekdagen = array(
    'ma' => 'maandag',
    'di' => 'dinsdag',
    'wo' => 'woensdag',
    'do' => 'donderdag',
    'vr' => 'vrijdag',
    'za' => 'zaterdag',
    'zo' => 'zondag'
    );

foreach ($weekdagen as $k => $v) {
    // $v = ucfirst($v);
    switch ($k){
        case 'za':
        case 'zo':
            echo strtoupper($v), "<br>";
        break;
        default:
            echo ucfirst($v), "<br>";
        break;
    }
}