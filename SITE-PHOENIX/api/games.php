<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/SITE-PHOENIX/imagens/";

    $games[0] = array("id"=>0, "nome"=>"Desordeon", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}DesordeonBanner.jpeg");

    $games[2] = array("id"=>2, "nome"=>"Red Dead 3", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg");

    $games[3] = array("id"=>3, "nome"=>"Elden Ring", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg");

    $games[4] = array("id"=>4, "nome"=>"", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg");

    $games[5] = array("id"=>5, "nome"=>"", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg");

    echo json_encode($games);