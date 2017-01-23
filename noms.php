<?php

$tab[] = "Lefevre";
$tab[] = "Vieugue";
$tab[] = "Witczak";
$tab[] = "Brillant";
$tab[] = "Gelisse";
$tab[] = "Boulkhir";
$tab[] = "Renard";
$tab[] = "Lefeve";
$tab[] = "Gerard";
$tab[] = "Garot";
$tab[] = "Legrand";
$tab[] = "Perlot";
$tab[] = "Poquet";

$req = $_GET['req'];

$response = '';

if(trim($req) != ""){
    $req = strtolower($req);
    $long = strlen($req);
    foreach ($tab as $nom) {
        if(stristr($req, substr($nom, 0, $long))){
            if($response == ""){
                $response = $nom;
            } else {
                $response .= ", " . $nom;
            }
        }
    }
}

if($response == ""){
    $response = "Aucun nom";
}
echo $response;
