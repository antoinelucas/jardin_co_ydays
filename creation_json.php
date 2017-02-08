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
$json_encode = json_encode($a, JSON_FORCE_OBJECT);




// Nom du fichier à créer
$nom_du_fichier = 'fichier.json';

// Ouverture du fichier
$fichier = fopen($nom_du_fichier, 'w+');

// Ecriture dans le fichier
fwrite($fichier, $json_encode);

// Fermeture du fichier
fclose($fichier);




