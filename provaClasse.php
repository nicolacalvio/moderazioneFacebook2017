<?php
/**
 * Created by PhpStorm.
 * User: mariarosariatarquinio
 * Date: 29/05/17
 * Time: 15:40
 */
include 'numeroLike.php';
$clientId="";
$clientSecret="";
$token="";
$mail="";
$idPagina="";

$dataInizioControllo = "0"; //bisognerà aggiustare la data nel formato corretto
$obj = new facebookFunctions($clientId, $clientSecret,$token ,$mail , $idPagina);

//aggiunta di parole di rilievo
//$obj->aggiungiParola("total", "avvisa");

//devo creare un metodo che mostri tutte le parole nella lista
$elencoParolacce = $obj->caricaParolacce(); //[$i][0] parolaccia      [$i][1] azione
//un metodo che cancelli la parole che si vuole cancellare dal db
    //$obj->rimuoviParola("total");

//controllo di parolacce
$obj->controllaContenutiScurrili($dataInizioControllo);


//messaggio broadcast alle persone che fanno attività nella pagina
//per mandare un messaggio broadcast apro nell'interfaccio tramite il javascript
//una finestra di dialogo dove da database aggiungerò tutte le persone a cui mandare un messaggio
//una volta aggiunte le persone mostrerò la finestra e l'utente potrà scrivere il suo messaggio
