<?php

function true(){
    return true;
}

function string(String $str){
    return $str;
}

function string2(String $str, String $str2){
    return $str.$str2;
}

function nbr(int $nbr, int $nbr2){
    if ($nbr > $nbr2) return "le 1er nombre est plus grand";
    elseif ($nbr < $nbr2) return "le 1er nombr eest plus petit";
    else return "les 2 nombre sont identique";
}

function nbrAndStr(int $nbr, String $str){
    return $nbr.$str;
}

function phrase(String $nom, String $prenom, int $age){
    return "Bonjour".$nom." ".$prenom." tu as ".$age;
}

function(String $gender, int $age){
    if($gender === "Homme"){
        if ($age>18) return "Vous êtes un homme et vous êtes majeur";
        else return "Vous êtes un homme et vous êtes mineur";
    }
    elseif($gender === "Femme"){
        if ($age>18) return "Vous êtes une femme et vous êtes majeur";
        else return "Vous êtes une femme et vous êtes mineur";
    }
    else return "Entrez des valeur correct";
}

function addition(int $nbr1 = 5, int $nbr2 = 5, int $nbr3 = 5){
    return $nbr1 + $nbr2 + $nbr3;
}

?>