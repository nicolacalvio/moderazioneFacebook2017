<?php
/**
 * Created by PhpStorm.
 * User: mariarosariatarquinio
 * Date: 09/06/17
 * Time: 14:45
 */
include "numeroLike.php";
$parola = $_GET['parola'];
$azione = $_GET['azione'];
$obj = new facebookFunctions("", "", "", "", "");
$obj->aggiungiParola($parola, $azione);
