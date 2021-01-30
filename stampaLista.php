<?php
/**
 * Created by PhpStorm.
 * User: mariarosariatarquinio
 * Date: 06/06/17
 * Time: 15:41
 */
if(file_exists("segnalazioni.txt")){
    $stringa='<ul class="list-group">';
    $file = fopen("segnalazioni.txt", "r");
    while(!feof($file)){
        $line = fgets($file);
        $stringa = $stringa.'<li class="list-group-item">'.$line.'</li>';
    }
    $stringa =$stringa. '</ul>';
    echo $stringa;
}
