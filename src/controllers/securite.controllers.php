<?php
require_once(PATH_SRC."modeles".DIRECTORY_SEPARATOR."user.modele.php");
ini_set('display_errors', 'on');
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    if($_REQUEST['action']=='connexion'){
        $login = $_POST["login"];
        $password = $_POST["password"];
        connexion($login,$password);
       
    }
  

}
if($_SERVER["REQUEST_METHOD"]=="GET"){

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){  
        
         require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
         
         }

    }else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");


    }
    
    
}
function connexion($login,$password){
    $error=[];
    champs_obligatoir("login",$login,$error,"ce champ est obligatoire");
    if(count($error)==0){

        valid_email("login",$login,$error,"login invalide");

    }

    if(count($error)==0){
        // $users;
        $users= verifie_password_login($login,$password);

        if(count($users)!=0){
            $_SESSION["user_connect"]=$users; 
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }
        else{
           $error["connexion"]="login ou mot de password incorrecte";
           $_SESSION[KEY_ERRORS]=$error;
           header("location:".WEB_ROOT);
           exit();
        
        }
    }    
    else{
        $_SESSION[KEY_ERRORS]=$error;
        header("location:".WEB_ROOT);
        exit();
    }
}
