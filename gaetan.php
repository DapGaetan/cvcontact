<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Contactez-moi</title>
</head>

<body>
    <div class="carre">
        <?php
  if(isset($_POST["envoie"]) ) {
    if ( $_POST["user_message"]=='' || !isset($_POST["user_message"])  ){
        echo '<script type="text/javascript">alert(\'Veuillez remplir toutes les cases.\');</script>';
    }
    else{
        mail('dapvril.gaetan@gmail.com','coucou MDS', $_POST["user_message"]);
        echo '<script type="text/javascript">alert(\'Message transmis !\');</script>';
            if(isset($_POST["autorize"])){
                if (!isset($_POST['mail']) || $_POST['mail']=='')  {
                    $_POST['mail']="";
                }
                $adresseMail = $_POST['mail'];
                $message = $_POST['user_message'];


                $db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');
                $result = $db->prepare('INSERT INTO mdsgaetan (mail, message) VALUES(:adresseMail, :message)');
                $result->execute(array('adresseMail' =>$adresseMail, 'message' => $message));
            }
        }
        
    }

    ?>

        <div class="font">
            <div class="formumu">
                <p class="contact">Contact</p>
                <a href="index.html">Retourner a la page précèdente</a>
                <br>
                <br>
                <div>
                    <form action="#" method="post" name="contact">
                        <div class="idd">
                            <p class="pre">Adresse mail :</p> <input class="ids" type="text" name="mail"
                                autocomplete="mail">
                            <br>
                            <p class="pre">Prénom :</p> <input class="ids" type="text" name="prenom"
                                autocomplete="prenom">
                            <br>
                            <p class="pre">Mots de passe :</p> <input class="ids" type="password" name="mdp"
                                autocomplete="password">
                        </div>
                        <br>
                        <p class="pre">Date de naissance :</p>
                        <input class="ids" type="date" name="date" autocomplete="date">
                        <br>
                        <p class="pre">Genre :</p>
                        Mr <input type="radio" name="civ">
                        Ms <input type="radio" name="civ">
                        Transgender <input type="radio" name="civ">
                        <br>
                        <p class="pre">Comment vous déplacer vous le plus souvent :</p>
                        <div class="transport">
                            <input type="checkbox" name=""> train
                            <br>
                            <input type="checkbox" name=""> car
                            <br>
                            <input type="checkbox" name=""> plane
                        </div>
                        <br>
                        <p class="langue">Quelle langue parlez vous ?</p>
                        <select name="country">
                            <option>FR</option>
                            <option>UK</option>
                            <option>BE</option>
                            <option>RU</option>
                        </select>
                        <br>
                        <textarea name="user_message" autocapitalize="message"></textarea>
                        <br>
                        I autorize to save my information <input type="checkbox" name="autorize">
                        <br>
                        <input type="submit" value="Send mail" name="envoie">
                </div>
            </div>
        </div>
        </div>
        </form>

        </body>

        </html>