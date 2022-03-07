<?php

// function verifie_password_login($login ,$password){
//     $userse = json_to_array("users");
//     foreach ($userse as $user) {
//         if($user['login']== $login && $user['password']== $password){
//             return $user;
            
//         }
       
//     }
//     return [];
// }json_to_array
  
function verifie_password_login($login ,$password){
    $users = json_to_array("users");
    foreach ($users as $user) {
        if($user['login']== $login && $user['password']== $password){
            return $user;
        }
       
    }
    return [];
}
