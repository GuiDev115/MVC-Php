<?php

namespace app\controllers;

class Site
{
    public function home(){
        require_once __DIR__ . '/../views/home.php';
    }

    public function galeria($foto){
        $photo = $foto;
        require_once __DIR__ . '/../views/galeria.php';
    }

    public function consulta(){
        require_once __DIR__ . '/../views/consulta.php';
    }

    public function cadastro(){
        require_once __DIR__ . '/../views/cadastro.php';
    }
}