<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gestione Pagina Facebook</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row">
    <div class="col-sm-4" >
        </div>
    <div class="col-sm-4" align ="center">
<div id="container">
<br>Avvisi<br><br<br><br>
<div id = "stampaLista">
<?php include "stampaLista.php"; ?>
</div>
<div id="aggiungiParolaBlackList">
    <div class="form-group">
        <label for="Message">Parola Da Aggiungere a BlackList</label>
        <input type="text" class="form-control" id="parolaBlackList" placeholder="Parola">
        <input type="text" class="form-control" id="azione" placeholder="Azione"><br>
    </div>
    <button type="button" class="btn btn-success" onclick="aggiungiParola(document.getElementById('parolaBlackList').value, document.getElementById('azione').value)">Aggiungi Parola</button><button type="button" class="btn btn-success" onclick="mostraParole()">mostra parole blacklist</button><br><br><br><br><br><br>
</div>
    <div id="eliminaParola">
        <div class="form-group">
            <label for="Message">Parola Da Eliminare Dalla BlackList</label>
            <input type="text" class="form-control" id="parolaBlackListDaEliminare" placeholder="Parola">
        </div>
        <button type="button" class="btn btn-success" onclick="eliminaParolaDalDb(document.getElementById('parolaBlackListDaEliminare').value)">Elimina Parola</button><br>
    </div>
    <br><br><br><br><br>
<div id="aggiornaControllo">
    <br>AGGIORNA CONTROLLO<br>
    <input type="button" class="btn btn-success" value="aggiorna" onclick="aggiorna()">
</div>
    </div>
        </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    function aggiorna(){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            }
        };
        xmlhttp.open("GET","provaClasse.php?q=ciao",true);
        xmlhttp.send();
    }
    function aggiungiParola(parola, azione){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //il documento in php dovrà aggioungere la data parola
                //inoltre dovrà ritornare un messaggio di successo o insuccesso
            }
        };
        xmlhttp.open("GET","aggiungiParola.php?parola="+parola+"&azione="+azione,true);
        xmlhttp.send();
    }
    function mostraParole(){
        window.open("mostraParole.php");
    }
    function eliminaParolaDalDb(parola){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //il documento in php dovrà aggioungere la data parola
                //inoltre dovrà ritornare un messaggio di successo o insuccesso
            }
        };
        xmlhttp.open("GET","eliminaParola.php?parola="+parola,true);
        xmlhttp.send();
    }

</script>
</div>
</body>
</html>