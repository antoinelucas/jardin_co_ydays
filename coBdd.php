<?php
/**
 * Created by PhpStorm.
 * User: Antoine Lucas
 * Date: 30/01/2017
 * Time: 11:54
 */

try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=Jardin_co;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>