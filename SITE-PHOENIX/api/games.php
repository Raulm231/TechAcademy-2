<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://phoenixgamestore.000webhostapp.com/img/";
    $caminho = "jogo/";

    $games[1] = array("id"=>1, "nome"=>"Crimson Curse", "descricao"=>"<p>Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.</p>",
    "text"=>"{$path}cc-text.png", "tags"=>"• RPG • Fantasia • Luta com Chefe", "dev"=>"Desenvolvido por Lucas Brasso",
    "poster"=>"{$path}cc-Vbanner.jpg","banner"=>"{$path}cc-banner.jpg","jogo"=>"{$caminho}crimsonCurse/index.html");

    $games[2] = array("id"=>2, "nome"=>"Cyber Gun", "descricao"=>"<p>Em um mundo dominado por tecnologia avançada e máquinas renegadas, você é o último protótipo de defesa, armado com a mais poderosa arma cibernética: a Cybergun. Sua missão é simples, mas mortal: eliminar todos os robôs inimigos que ameaçam a paz e a ordem.</p>",
    "text"=>"{$path}cg-text.png", "tags"=>"• Tiro • Futurista • Plataforma", "dev"=>"Desenvolvido por Gabriel Menechini",
    "poster"=>"{$path}cg-Vbanner.jpg","banner"=>"{$path}cg-banner.jpg","jogo"=>"{$caminho}Cybergun/index.html");

    $games[3] = array("id"=>3, "nome"=>"Desordeon", "descricao"=>"<p>Na Floresta Verdejante vivia Twelves, um macaco ágil e travesso, que encantava todos com sua dança nas copas das árvores. Sua curiosidade o levava a explorar sem medo cada canto do habitat. A tranquilidade de Twelves foi interrompida por Dracow, um morcego mutante que queria capturá-lo. Dracow, isolado e sedento por poder, trouxe tensão à floresta. Surpreendido por Dracow, Twelves lutou para escapar. Após uma frenética perseguição pela floresta, Twelves conseguiu despistar Dracow e escapar por um portal. A Floresta Verdejante continuou vibrante, alimentada pela coragem de habitantes como Twelves.</p>",
    "text"=>"{$path}des-text.png", "tags"=>"• Aventura • Corrida • MACACO", "dev"=>"Desenvolvido por Raul Miguel",
    "poster"=>"{$path}des-Vbanner.jpg","banner"=>"{$path}des-banner.jpg","jogo"=>"{$caminho}Desordeon/index.html");

    $games[4] = array("id"=>4, "nome"=>"Flying Chicken", "descricao"=>"<p>Embarque na jornada emocionante de Flying Chicken, onde você controla uma galinha corajosa que enfrenta os céus em uma missão ousada! Inspirado no clássico Flappy Bird, Flying Chicken eleva a diversão com desafios adicionais e uma protagonista adorável.</p>",
    "text"=>"{$path}fc-text.png", "tags"=>"• Corrida Infinita • Casual • Arcade", "dev"=>"Desenvolvido por Gabriel Mastracose",
    "poster"=>"{$path}fc-Vbanner.jpg","banner"=>"{$path}fc-banner.jpg","jogo"=>"{$caminho}flyingChicken/index.html");

    $games[5] = array("id"=>5, "nome"=>"Meowtopia", "descricao"=>"<p>Em Meowtopia, os jogadores assumem o controle de Buggy, enquanto ele se aventura numa missão para encontrar sua amiga desaparecida, Lily. Com gráficos Pixel Art, explore 3 fases desvendando as pistas deixadas para trás, enquanto Buggy mergulha cada vez mais fundo na investigação, com um detetive que parece ter seus próprios segredos.</p>",
    "text"=>"{$path}mw-text.png", "tags"=>"• Aventura • Mistério • Plataforma", "dev"=>"Desenvolvido por Alana Kovalski",
    "poster"=>"{$path}mw-Vbanner.jpg","banner"=>"{$path}mw-banner.jpg","jogo"=>"{$caminho}Meowtopia/index.html");

    $games[6] = array("id"=>6, "nome"=>"Omega Collapse", "descricao"=>"<p>Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.</p>",
    "text"=>"{$path}oc-text.png", "tags"=>"• Zumbi • Tiro • Terror", "dev"=>"Desenvolvido por Gabriel Especiam",
    "poster"=>"{$path}oc-Vbanner.jpg","banner"=>"{$path}oc-banner.jpg","jogo"=>"{$caminho}omegaCollapse/index.html");

    echo json_encode($games);