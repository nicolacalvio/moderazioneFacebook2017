<?php
/**
 * Created by PhpStorm.
 * User: mariarosariatarquinio
 * Date: 09/06/17
 * Time: 15:09
 */
include "numeroLike.php";
$obj = new facebookFunctions("", "", "", "", "");
echo $obj->caricaParole();
