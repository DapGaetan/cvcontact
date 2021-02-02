<?php

if($_GET['mail']){
    $adresseMail = $_GET['mail'];
    //$db = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', 'root';)
    $db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

    $selectall = $db->query('SELECT * FROM mdsgaetan WHERE mail="'.$adresseMail.'"');
    $result = $selectall->fetch();
    $counttable = (count($result));

    if($counttable >= 1){
        $delete = $db->prepare('DELETE FROM mdsgaetan WHERE mail="'.$adresseMail.'"');
        $delete->execute();

        // confirmation de supresion

        echo('<script type="text/javascript">alert(\'Vos donées de notre liste de diffusion\');</script>');
    }


}

?>