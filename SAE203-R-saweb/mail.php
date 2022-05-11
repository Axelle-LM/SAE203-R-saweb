<?php
    if(isset($_POST["mailclient"])){
        $mailclient="<h1>". $_POST["mailclient"]."</h1>";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    mail('mukei.lenaya@hotmail.com','test subject',$mailclient,implode("\r\n", $headers));
    var_dump("Mail envoyé");
    }

?>