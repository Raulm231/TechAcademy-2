<?php
$url = "http://localhost/site/TechAcademy-2/api/banners.php";


$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);

//print_r($dadosBanner);
?>

<div class="pghome">

    <br>

    <h2>RECOMENDAÇÕES EM DESTAQUE:</h2>

    <br>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2400">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
            foreach ($dadosBanner as $dados) {
            ?>
                <div class="carousel-item active">
                    <a href="games/<?= $dados->id_game ?>">
                        <img src="<?= $dados->imagem ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>

    <h3>TODOS OS JOGOS:</h3>

    <br>
    <?php

?>
</div>

    <div class="row">
        <?php
            foreach($dadosJogos as $dados) {
                ?>
                <div class="col-12 col-md-4">
                    <div class="card" data-aos="fade-right">
                        <img src="<?=$dados->poster?>"
                        alt="<?=$dados->nome?>" class="card-img-top">
                        <div class="card-text text-center">
                            <p><strong><?=$dados->nome?></strong></p>
                            <div class="grid-jogos">
                            <p>
                                <a href="games/<?=$dados->id?>" title="Detalhes do Jogo" class="btn btn-danger">
                                    <i class="fas fa-search"></i>
                                    Detalhes
                                </a>
                                
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
<br>
<br>