<?php
/**
 * Created by PhpStorm.
 * User: Antoine Lucas
 * Date: 08/02/2017
 * Time: 10:07
 */

header('Content-Type: text/html; charset=utf-8');


$a = array ("jardin_co" => array("utilisateurs" => array("idUtilisateur" => "2","login" => "alex" )));

echo "Tableau associatif affiche comme objet: ", json_encode($a, JSON_FORCE_OBJECT), "\n\n";
$b = utf8_encode(json_encode($a, JSON_FORCE_OBJECT));
echo "\n\n";
var_dump($b);




// Nom du fichier à créer
$nom_du_fichier = 'fichier.json';

// Ouverture du fichier
$fichier = fopen($nom_du_fichier, 'w+');

// Ecriture dans le fichier
fwrite($fichier, $b);

// Fermeture du fichier
fclose($fichier);

$json = file_get_contents("http://antoine-lucas.ynov-nantes.net/fichier.json");

// -------------------------------------------TEST---------------------------------------

$parsed_json = json_decode($b);

var_dump($parsed_json);

echo "\n\n";

$user_now = $parsed_json ->{"jardin_co"}->{"utilisateur"}->{"idUtilisateus"};
$user_login = $parsed_json ->{"jardin_co"}->{"utilisateur"}->{"login"};

echo " L'id de l'utilisateur actuel : ".$user_now."\t Son login : ".$user_login;
