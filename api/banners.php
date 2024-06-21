<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/sjk/TechAcademy-2/imagens/";

    $banners[0] = array("nome"=>"Fallout 76","imagem"=>"{$path}Des-Banner.png","id_game"=>1);
    $banners[1] = array("nome"=>"Street Fighter 6","imagem"=>"{$path}eldenring.jpg","id_game"=>2);
    $banners[2] = array("nome"=>"Mortal Kombal 1","imagem"=>"{$path}red dead 3.webp","id_game"=>3);

    echo json_encode($banners);