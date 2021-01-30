<?php
/**
 * Created by PhpStorm.
 * User: mariarosariatarquinio
 * Date: 08/06/17
 * Time: 09:52
 */
$link = mysqli_connect("127.0.0.1", "root", "", "my_nicolacalvio");
$recipients = array();
$i=0;
while($row=mysqli_fetch_array(mysqli_query($link, "SELECT (email) FROM utenti_attivi"), MYSQLI_NUM)){
    $recipients[$i] = $row;
    $i++;
}
$email_to = implode(',', $recipients);
sendMail($email_to, $_GET['messaggio'], $_GET['oggetto']);

function sendMail($to, $collegamento, $oggetto){
    $subject = $oggetto;
    $body = $collegamento;
    if (mail($to, $subject, $body))
        echo("<p>Email successfully sent!</p>");
    else
        echo("<p>Email delivery failed…</p>");

}