<?php
/**
 * Created by PhpStorm.
 * User: Antoine Lucas
 * Date: 08/02/2017
 * Time: 10:07
 */

$a = array ("jardin_co" => array("utilisateurs" => array('idUtilisateur' => 2,'login' => "alex" )));

echo "Tableau associatif affiché comme objet: ", json_encode($a, JSON_FORCE_OBJECT), "\n\n";


/*  $contenu_json =json_encode($creation_json);

// Nom du fichier à créer
$nom_du_fichier = 'fichier.json';

// Ouverture du fichier
$fichier = fopen($nom_du_fichier, 'w+');

// Ecriture dans le fichier
fwrite($fichier, $creation_json);

// Fermeture du fichier
fclose($fichier);