<?php
/**
 * Created by PhpStorm.
 * User: mariarosariatarquinio
 * Date: 29/05/17
 * Time: 16:03
 */
class facebookFunctions
{
    public $clientId;       //parametro per generazione token
    public $clientSecret;   //parametro per generazione token
    public $token;          //in caso di token già generato
    public $mail;           //la mail a cui spedire info di allerta
    public $idPagina;       //l'id della pagina che devo analizzare
    public $vocaboliEAzioni=array();    //array con tutti i vocaboli e le relative azioni
    public $link;           //per il collegamento con il db
    public $index=0;
    public function facebookFunctions($id, $secret, $tok, $mail, $idpag){
        $this->clientId = $id;
        $this->clientSecret = $secret;
        $this->mail = $mail;
        $this->idPagina = $idpag;
        $this->link = mysqli_connect("localhost", "root", "", "my_nicolacalvio");   //connessione al db
        $this->token = $tok;
        if(file_exists("segnalazioni.txt")){
            unlink(realpath("segnalazioni.txt"));
        }
        /*
        if($tok != ""){ //nel caso che il token è presente lo istanzio altrimenti lo genero
            $this->token = $tok;
        }else{
            $this->token = $this->getToken();
        }
        */

    }
    private function getToken(){
        $token = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id'.$this->clientId.'=&client_secret'.$this->clientSecret.'=&grant_type=client_credentials', true);
        $arrayToken = json_decode($token, true);
        return $arrayToken[0][1];
    }

    private function aggiungiAlDbUtenti($idCreatore){    //questa funzione dato un id di un utente, il nome lo aggiunge al db
        //dato l'id di ogni persona popolare il database con i seguenti campi:
        //id, nome, email, eta, scuola, location, hometown, work, birthday
        $informazioni = $this->cercaNomeEmailCellulareEta($idCreatore);
        $query = mysqli_query($this->link, "INSERT INTO utenti_attivi VALUES ('$informazioni[0]', '$informazioni[1]', '$informazioni[2]', '$informazioni[3]', '$informazioni[4]', '$informazioni[5]', '$informazioni[6]', '$informazioni[7]')");
    }
    private function cercaNomeEmailCellulareEta($id){
        $info = array();
        $info[0] = $id;
        $info[1] = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."?access_token=".$this->token, true), true)["name"];
        $info[2] = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."?fields=email&access_token=".$this->token, true), true)["email"];
        $info[3] = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."?fields=education&access_token=".$this->token, true), true)["education"]["type"];
        $info[4] = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."?fields=location&access_token=".$this->token, true), true)["location"];
        $info[5] = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."?fields=hometown&access_token=".$this->token, true), true)["hometown"]["name"];
        $work = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."?fields=work&access_token=".$this->token, true), true)["work"]["employer"];
        $info[6] = $work["name"];
        $info[7] = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."?fields=birthday&access_token=".$this->token, true), true)["birthday"];
        return $info;
    }
    public function restituisciTuttiGliId(){
        $utentiAttivi = array();
        $sql="SELECT id from utenti_attivi";
        $result=mysqli_query($this->link,$sql);
        $x=0;
        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
            $utentiAttivi[$x]= $row;
            $x++;
        }
        return $utentiAttivi;
    }
    public function controllaContenutiScurrili($data){
        //creare tabella database con tutte le parole scurrili e le parole che l'utente decide di aggiungere come tali
        //quando si rileva un contenuto inadatto va segnalato tramite alert nella dashboard e con un servizio email
        //nella gestione della blacklist l'utente specificherà come agire per ogni parola inserita
        //per esempio in caso di parolaccia l'utente metterà di eliminare il commento
        //in caso di parola che riguarda un competitor l'utente deciderà o di eliminare il messaggio o di essere solo avvertito
        $this->caricaParolacce();
        $this->controllaElementiDaUnaDeterminataData($data);
    }
    public function aggiungiParola($parola, $azione){
        $query = mysqli_query($this->link, "INSERT INTO moderazione_parole (parola,azione) VALUES ('$parola', '$azione')");

    }
    private function controllaElementiDaUnaDeterminataData($dataInizio){
        //dalla data indicata inizio e scorro tutto, iniziando dai post nella bacheca e finendo per ogni singolo commento e vedo se la parola
        //è contenuta in un array che mi tiro giù ogni volta da un database contenente paroli scurrili
            //se trovo una parola scurrile allora vedo l'indice 3 dell'array e scopro che azione devo fare
                //nel caso l'azione sia elimina allora provvedo a chiamare un metodo per l'eliminazione del commento o post dell'utente e chiamo il metodo per avvisare via mail l'utente
                //nel caso l'azione sia solo di avvisare allora si provvede a mandare solo una mail
        $this->controllaPostECommenti($dataInizio, "feed", $this->idPagina);  //controllo tutti i post con la data di inizio
    }
    public function caricaParolacce(){
        $sql="SELECT parola,azione from moderazione_parole";
        $result=mysqli_query($this->link,$sql);
        $x=0;
        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
            $this->vocaboliEAzioni[$x] = $row;
            $x++;
        }
        return $this->vocaboliEAzioni;
    }
    public function rimuoviParola($parola){
        $query = mysqli_query($this->link, "delete from moderazione_parole where parola = '$parola'");
    }
    private function ricavaCreatorePostOCommento($id){   //da verificare se la lettura dell'array è esatta
        $creatoreArray = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."?fields=from&access_token=".$this->token, true), true);
        $this->aggiungiAlDbUtenti($creatoreArray["from"]["id"]);
    }
    private function ricavaMiPiacePostOCommento($id){
        //devo ricavare tutti i mi piace di un post o commento
        $creatoreArray = json_decode(file_get_contents("https://graph.facebook.com/v2.9/".$id."/likes?access_token=".$this->token, true), true);
        $booleana = true;
        for($i=0;$i<count($creatoreArray["data"]) AND $booleana;$i++){
            $dati = $creatoreArray["data"][$i];
            $this->aggiungiAlDbUtenti($dati["id"]);//funzione che ricava dati per ogni singolo utente dato l'id è aggiunge tutto al db
            if(isset($creatoreArray['paging']['next]'])){
                $next = $creatoreArray['paging']['next'];
                //la variabile next contiene l'indirizzo del nuovo file json
                $creatoreArray = json_decode(file_get_contents($next, true), true); //contiene tutti i post effettuati
                echo "next";
            }
            else{
                echo "non esiste";
                $booleana = false;
            }
        }
    }
    private function controllaPostECommenti($dataInizio, $selettore, $idPag){
        $this->index = $this->index+1;
        $postsFile = file_get_contents("https://graph.facebook.com/v2.9/".$idPag."/".$selettore."?access_token=".$this->token, true);
        $posts = json_decode($postsFile, true); //contiene tutti i post effettuati
        if(isset ($posts['data'][0])){
            $post = $posts['data'][0];
            $giornoCreazione = $post['created_time'];
            for($i=0; ($giornoCreazione>=$dataInizio) AND $i<count($posts['data']);$i++){
                $post = $posts['data'][$i];
                $giornoCreazione = $post['created_time'];
                $messaggio = $post['message'];
                $id = $post['id'];
                $this->ricavaCreatorePostOCommento($id);    //funzioni per ricavare id che fanno attività sulla pagina
                $this->ricavaMiPiacePostOCommento($id);     //funzioni per ricavare id che fanno attività sulla pagina
                if(strstr($messaggio, " ")){    //se il messaggio contiene spazi allora è composto da più parole
                    $messaggioarr = explode(" ", $messaggio);
                    for($j=0;$j<count($messaggioarr);$j++){
                        for($k=0;$k<count($this->vocaboliEAzioni);$k++){
                            if($messaggioarr[$j] == $this->vocaboliEAzioni[$k][0]){
                                if($this->vocaboliEAzioni[$k][1] == "elimina") {
                                    $this->curl_del("https://graph.facebook.com/v2.9/" . $id . "?access_token=" . $this->token);    //allora devo cancellare l'intero post
                                    $this->sendMail($this->mail, $messaggio);   //devo mandare una mail di avviso
                                    $this->aggiungiSegnalazioniNelDb($messaggio);
                                    echo "cancellato";
                                }
                                else{
                                    $this->sendMail($this->mail, $messaggio);   //devo mandare una mail di avviso
                                    $this->aggiungiSegnalazioniNelDb($messaggio);
                                }
                            }
                        }
                    }
                }
                else{   //se il messaggio non contiene spazi allora è una singola parola
                    for($j=0;$j<count($this->vocaboliEAzioni);$j++){
                        if($messaggio == $this->vocaboliEAzioni[$j][0]){
                            if($this->vocaboliEAzioni[$j][1] == "elimina"){
                                $this->curl_del("https://graph.facebook.com/v2.9/" . $id . "?access_token=" . $this->token);    //allora devo cancellare l'intero post
                                $this->sendMail($this->mail, $messaggio);   //devo mandare una mail di avviso
                                $this->aggiungiSegnalazioniNelDb($messaggio);
                                echo "cancellato";
                            }else {
                                $this->sendMail($this->mail, $messaggio);
                                $this->aggiungiSegnalazioniNelDb($messaggio);
                            }
                        }
                    }
                }
                if($selettore != "comments") {
                    $this->controllaPostECommenti($dataInizio, "comments", $id);    //controllo i commenti del post richiamando la medesima funzione
                }
                if(($i == count($posts['data'])-1) AND $selettore=="comments"){
                        $next = $posts['paging']['next'];
                        echo "next";
                        $postsFile = file_get_contents($next, true);
                        $posts = json_decode($postsFile, true); //contiene tutti i post effettuati
                }

            }
        }
    }
    private function aggiungiSegnalazioniNelDb($collegamento){
        $file = fopen("segnalazioni.txt", "a");
        fwrite($file, $collegamento." \n");

    }
    private function curl_del($path){
        $url = $path;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $result;
    }
    private function sendMail($to, $collegamento){
        //$to è la variabile che va impostata con l'indirizzo email del ricevente
        //$collegamento è la pagina web che riporta al commento o al post rilevato con una parola chiave
    $subject = "moderazione";
    $body = "Ciao, abbiamo rilevato che un utente ha usato una parola chiave che hai impostato. Il messaggio è il seguente: \n \n ".$collegamento;
    if (mail($to, $subject, $body))
     echo("<p>Email successfully sent!</p>");
    else
     echo("<p>Email delivery failed…</p>");
    }
    public function caricaParole(){
        $x=0;
        $riga = array();
        $sql="SELECT parola, azione FROM moderazione_parole";
        $result=mysqli_query($this->link,$sql);
        while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
            $riga[$x] = $row;
            $x++;
        }
        $stringa='<table class="table table-striped"<tr><th>parola</th><th>azione</th></tr>';
        foreach($riga as  $variabile){
            //$variabile[0] = parola
            //$variabile[1] = azione
            $stringa = $stringa.'<tr><td>'.$variabile[0].'</td><td>'.$variabile[1].'</td></tr>';
        }
        $stringa = $stringa."</table>";
        return $stringa;
    }
}