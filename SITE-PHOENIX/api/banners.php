<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/SITE-PHOENIX/imagens/";

    $banners[0] = array("nome"=>"Fallout 76","imagem"=>"{$path}DesordeonBanner.jpeg","id_game"=>1);
    $banners[1] = array("nome"=>"Street Fighter 6","imagem"=>"{$path}eldenring.jpg","id_game"=>2);
    $banners[2] = array("nome"=>"Mortal Kombal 1","imagem"=>"{$path}red dead 3.webp","id_game"=>3);

    echo json_encode($banners);