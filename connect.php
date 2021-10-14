<?php
$server="localhost";
$nombd="salac_intra";
$user="phpmyadmin";
$mdp="root";
try{
    $bdd = new PDO ("mysql:host=$server;dbname=$nombd;charset=UTF8",$user,$mdp);
    echo"semble ok";  //-- verification
}
catch(Exeption$e){
    echo"Exeption reçue: ".$e->getMessage()."\n";
    //TODO
}
?>