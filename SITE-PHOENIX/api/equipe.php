<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/SITE%20PHOENIX/imagens/";

    $equipe[1] = array("nome"=>"Raul Miguel","cargo"=>"Desenvolvedor de Games","foto"=>"{$path}1ano.jpg");
    $equipe[2] = array("nome"=>"Lucas Brasso","cargo"=>"Diretor de Arte","foto"=>"{$path}lucasBrasso.png");
    $equipe[3] = array("nome"=>"Luiz Miguel","cargo"=>"Desenvolvedor de Games","foto"=>"{$path}Luiz.jpg");
    $equipe[4] = array("nome"=>"Samuel Ernandes","cargo"=>"CEO / Desenvolvedora de Software","foto"=>"{$path}Ernandes.jpg");

    echo json_encode($equipe);