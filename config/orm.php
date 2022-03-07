<?php
//recuperation des donnee du fichier djon
function json_to_array(string $key):array{ 
    $datajson=file_get_contents(PATH_DB);
    $data=json_decode($datajson,true);
    return $data[$key];
}
function array_to_json(string $key,array $data):array{
    return [];

}