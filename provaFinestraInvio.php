<!DOCTYPE html>
<html lang="en" xmlns:http="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<input type = button onclick="getSendWindow('https://www.google.it')">


<script>    //aggiungo le api javascript di facebook
window.fbAsyncInit = function() {
    FB.init({
        appId            : '',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v2.9'
    });
    FB.AppEvents.logPageView();
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;};
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


<script>
    function getSendWindow(link){
        FB.ui({
            method: 'send',
            link: link,
            to: [<?php include "creaStringheId.php" ?>]
        });
    }


</script>
</body>
</html>