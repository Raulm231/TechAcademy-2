<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/droga/TechAcademy-2/imagens/";

    $games[1] = array("id"=>1, "nome"=>"Desordeon", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}Des-Banner.png");

    $games[2] = array("id"=>1, "nome"=>"Red Dead 3", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg");

    $games[3] = array("id"=>1, "nome"=>"Elden Ring", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg");

    $games[4] = array("id"=>1, "nome"=>"", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg");

    $games[5] = array("id"=>1, "nome"=>"", "descricao"=>"<p></p>
    <p></p>
    <p></p>",
    "poster"=>"{$path}poster_fallout.jpg","banner"=>"{$path}fallout.jpg");

    echo json_encode($games);