<?php
/**
 * Created by PhpStorm.
 * User: mariarosariatarquinio
 * Date: 09/06/17
 * Time: 15:52
 */
include "numeroLike.php";
$obj = new facebookFunctions("", "", "", "", "");
$obj->rimuoviParola($_GET['parola']);