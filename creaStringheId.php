<?php
/**
 * Created by PhpStorm.
 * User: mariarosariatarquinio
 * Date: 01/06/17
 * Time: 15:04
 */
    $stringhe="";
    $link = mysqli_connect("localhost", "root", "", "my_nicolacalvio");
    $utentiAttivi = array();
    $sql="SELECT id from utenti_attivi";
    $result=mysqli_query($link,$sql);
    $x=0;
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        $utentiAttivi[$x] = $row[0];
        $stringhe = "";
        $x++;
    }
    $numeroUtentiAttivi = count($utentiAttivi);
    if($numeroUtentiAttivi<=150){   //ogni finestra deve avere massimo 150 utenti
        for($i=0;$i<$numeroUtentiAttivi;$i++){
            if($i != $numeroUtentiAttivi-1)
                $stringhe = $stringhe.'"'.$utentiAttivi[$i].'", ';
            else
                $stringhe = $stringhe.'"'.$utentiAttivi[$i].'"';
        }
    }
    echo $stringhe;