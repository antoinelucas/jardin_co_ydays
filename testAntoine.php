<?php
/**
 * Created by PhpStorm.
 * User: Antoine Lucas
 * Date: 30/01/2017
 * Time: 10:45
 */

//indique le chemin du fichier json : une URL

$json = file_get_contents("http://antoine-lucas.ynov-nantes.net/exemple_json_jardin_co");

 // présente notre fichier json sous la forme d'objets (chaque objet peut lui même contenir un objet ou un tableau par exemple)

$parsed_json = json_decode($json);

//var_dump($parsed_json);


include_once 'recup_objet_json.php';

// on retourne la date dans la variable $date_jour en passant dans tout les objets du json jusqu'à la date.




