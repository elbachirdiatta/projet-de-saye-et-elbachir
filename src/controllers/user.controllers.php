<?php
require_once(PATH_SRC."modeles".DIRECTORY_SEPARATOR."user.modele.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=='connexion'){
             echo "bonjour";

        }

    }
}
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['action'])){
        if(!is_connect()){
            
            header("location:".WEB_ROOT);
            exit();
            
        } 
        if($_GET['action'] == "accueil"){
           
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
       }   
    }   
}