<?php
/**
 * Created by PhpStorm.
 * User: Antoine Lucas
 * Date: 02/02/2017
 * Time: 11:11
 */


// Ici on va récupérer tout les objets du json dont on va avoir besoin pour l'arduino ou la bdd ensuite.

// exemple   :   $date_jour = $parsed_json ->{'response'}->{'features'}->{'date'};

//--------------------------------------------------------Début-----------------------------------------------------------------

//--------------------------------------------------------features-----------------------------------------------------------------

// il faudra vérifier que $date_now est égale à la date du jour + heure pour être sur que c'est le bon json, sinon on ne le traitera pas.
$date_now = $parsed_json ->{"response"}->{"features"}->{"date"};


//--------------------------------------------------------Utilisateur-----------------------------------------------------------------

// permet de savoir quel est l'utilisateur courant
$user_now = $parsed_json ->{"jardin_co"}->{"utilisateur"}->{"idUtilisateus"};

// on récupère le mail si il y a besoin d'envoyer un mail pour le niveau d'eau.
$user_mail = $parsed_json ->{"jardin_co"}->{"utilisateur"}->{"mail"};


//--------------------------------------------------------Connexions-----------------------------------------------------------------

// pour savoir quelle co on utilise
$id_connexion = $parsed_json ->{"jardin_co"}->{"connexion"}->{"idConnexion"};

// avoir le ssid du réseau
$ssid_co = $parsed_json ->{"jardin_co"}->{"connexion"}->{"ssid"};

// le mdp du reseau
$password_co = $parsed_json ->{"jardin_co"}->{"connexion"}->{"mdp"};

// le nom BT
$bluetooth_co = $parsed_json ->{"jardin_co"}->{"connexion"}->{"bluetooth"};


//--------------------------------------------------------pots--------------------------------------------------------------------

//savoir sur quel pot on agit
$id_pot = $parsed_json ->{"jardin_co"}->{"pots"}->{"idPot"};

// le nom du pot
$name_pot = $parsed_json ->{"jardin_co"}->{"pots"}->{"nom"};


//--------------------------------------------------------plantes------------------------------------------------------------------

// savoir id de la plante planté
$id_plante = $parsed_json ->{"jardin_co"}->{"plantes"}->{"idPlante"};

// savoir le nom de la plante planté
$name_plante = $parsed_json ->{"jardin_co"}->{"plantes"}->{"nom"};


//--------------------------------------------------------reglages------------------------------------------------------------------

// savoir l'id du réglage en cours donc les réglages conseillé pour un plante type
$id_reglage = $parsed_json ->{"jardin_co"}->{"reglages"}->{"idReglage"};

// luminosité type
$luminosite_reglage = $parsed_json ->{"jardin_co"}->{"reglages"}->{"luminosite"};

// humidité de l'air type
$humiditeAir_reglage = $parsed_json ->{"jardin_co"}->{"reglages"}->{"humiditeAir"};

// humidité du sol type
$humiditeSol_reglage = $parsed_json ->{"jardin_co"}->{"reglages"}->{"humiditeSol"};

//temperature type
$temperature_reglage = $parsed_json ->{"jardin_co"}->{"reglages"}->{"temperature"};


//--------------------------------------------------------capteurs------------------------------------------------------------------

// récupère l'id capteur ?????
$id_capteur = $parsed_json ->{"jardin_co"}->{"capteurs"}->{"idCapteur"};

// récupère la luminosité capter
$luminosite_capteur = $parsed_json ->{"jardin_co"}->{"capteurs"}->{"luminosite"};

// récupère l'humidite de l'air capter
$humiditeAir_capteur = $parsed_json ->{"jardin_co"}->{"capteurs"}->{"humiditeAir"};

// récupère l'humidite du sol capter
$humiditeSol_capteur = $parsed_json ->{"jardin_co"}->{"capteurs"}->{"humiditeSol"};

// récupère le niveau d'eau
$niveauEau_capteur = $parsed_json ->{"jardin_co"}->{"capteurs"}->{"niveauEau"};

// récupère la temperature capter
$temperature_capteur = $parsed_json ->{"jardin_co"}->{"capteurs"}->{"temperature"};


//--------------------------------------------------------actions------------------------------------------------------------------

// récupère l'id action ?????
$id_action = $parsed_json ->{"jardin_co"}->{"actions"}->{"idAction"};

// à mettre à true si l'humidite du sol est inf à la valeur type, sinon mettre la valeur à false (permet d'activer la pompe)
$pompeEau_action = $parsed_json ->{"jardin_co"}->{"actions"}->{"pompeEau"};

// à mettre à true si l'humidite de l'air est sup à la valeur type, sinon mettre la valeur à false (permet d'activer le ventilateur1 soit l'entrée d'air = apport air froid)
$ventilateur1_action = $parsed_json ->{"jardin_co"}->{"actions"}->{"ventilateur1"};

// à mettre à true si l'humidite de l'air est sup à la valeur type, sinon mettre la valeur à false (permet d'activer le ventilateur2 soit la sortie d'air = apport air chaud si fermer)
$ventilateur2_action = $parsed_json ->{"jardin_co"}->{"actions"}->{"ventilateur2"};

// à mettre à true si on doit allumer les led, sinon mettre la valeur à false
$led_action = $parsed_json ->{"jardin_co"}->{"actions"}->{"led"};

//permet de récupérer les images de la camera
$img_action = $parsed_json ->{"jardin_co"}->{"actions"}->{"img"};





echo $user_now." ".$luminosite_reglage;











