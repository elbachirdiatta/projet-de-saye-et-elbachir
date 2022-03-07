<?php
function champs_obligatoir(string $key,string $data,array &$errors,string $message){
    if(empty($data)){
        $errors[$key]=$message;
    }


}
function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
    if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
    $errors[$key]=$message;
}
}