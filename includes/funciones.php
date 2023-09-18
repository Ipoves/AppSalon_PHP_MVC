<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function esUltimo(string $actual, string $proximo): bool {
    if($actual !== $proximo) {
        return true;
    }
    return false;
} 

//Funcion que revisa que el usuario esté autentificado

function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isAdmin() : void {
    if(!isset($_SESSION['admin'])) {
        header("location: /");
    }
}

function iniciaSesion(){
    if(!isset($_SESSION)){       
    session_start();
  }
}