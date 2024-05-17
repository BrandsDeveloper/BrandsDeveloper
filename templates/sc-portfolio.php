<?php

class Portfolio {
    public $nome;
    public $desc;
    public $link;
    public $category;
    public $image;

    public function __construct($nome, $desc, $link, $category, $image) {
        $this->nome = $nome;
        $this->desc = $desc;
        $this->link = $link;
        $this->category = $category;
        $this->image = $image;
    }
}

$args = array(
    new Portfolio('Lion', 'Web Development', 'https://brandsdev.com.br/projetos/lion/', 'php bootstrap', 'img/portfolio/Lion.webp'),
    new Portfolio('Guinpec', 'Web Development', 'https://guinpec.com/', 'wordpress php bootstrap', 'img/portfolio/guinpec.webp'),
    new Portfolio('Torres Promotora', 'Web Development', 'https://torrespromotora.com.br', 'elementor', 'img/portfolio/Torres.webp'),
    new Portfolio('Líder Consig', 'Web Development', 'https://brandsdeveloper.github.io/BootstrapLider', 'bootstrap', 'img/portfolio/bootstrap.webp'),
    new Portfolio('Mapa Dev Week', 'Web Development', 'https://brandsdeveloper.github.io/MapaDevWeek/', 'html-css', 'img/portfolio/mapa.webp'),
    new Portfolio('Portfólio', 'Web Development', 'https://brandsdeveloper.github.io/portifolio', 'html-css', 'img/portfolio/lider.webp'),
    new Portfolio('Portfólio', 'Web Development', 'https://brandsdeveloper.github.io/Rocketseat_Portfolio/', 'html-css', 'img/portfolio/rocketseat.webp'),
    new Portfolio('Estudando e Aplicando', 'Web Development', 'https://torrespromotora.com.br', 'html-css', 'img/portfolio/pesoal.webp'),
    new Portfolio('Criando Template', 'Web Development', 'https://brandsdeveloper.github.io/template', 'html-css', 'img/portfolio/template.webp'),
    new Portfolio('Login Líder', 'Web Development', 'https://brandsdeveloper.github.io/Login/', 'html-css', 'img/portfolio/Login.webp'),
    new Portfolio('Cadastro e Login', 'Web Development', 'https://brandsdeveloper.github.io/Tela_login/', 'html-css', 'img/portfolio/logon.webp'),
);

?>

<!-- Quarta Sessão - Portfólio -->
<section id="projeto" class="pt-3 mt-5">

    <div class="container mt-5">

        <h2 class="text-center">Portfólio</h2>

        <hr noshade="" class="hr mt-4 mb-0 mx-auto">
        <hr noshade="" class="hr mt-0 mb-4 mx-auto">

        <h3 class="mt-5 text-center">"Quem estuda e não pratica o que aprendeu, é como o homem que lavra e não semeia"</h3>

        <p class="text-center">Confira abaixo alguns dos projetos realizados, para estudo, desenvolvimento pessoal e trabalho.</p>

        <div class="d-flex flex-wrap gap-2 justify-content-center my-5" id="filters">
            <button class="btn btn-outline-primary border-1 border-primary button is-checked" data-filter="*">Todos</button>
            <button class="btn btn-outline-primary border-1 border-primary button" data-filter=".html-css">Html/Css</button>
            <button class="btn btn-outline-primary border-1 border-primary button" data-filter=".bootstrap">Bootstrap</button>
            <button class="btn btn-outline-primary border-1 border-primary button" data-filter=".wordpress">Wordpress</button>
            <button class="btn btn-outline-primary border-1 border-primary button" data-filter=".elementor">Elementor</button>
            <button class="btn btn-outline-primary border-1 border-primary button" data-filter=".php">PHP</button>
        </div>

        <div class="row gy-4 align-items-center" id="port">

        <?php foreach ($args as $key => $value) : ?>

            <div class="col-md-6 port_itens <?= $value->category; ?>" data-category="<?= $value->category; ?>">

                <div class="position-relative back overflow-hidden" >
                    <img src="<?= $url.$value->image; ?>" alt="">
                    <div class="backimg">
                        <span class="d-block mb-1 h4"> <?= $value->nome; ?> </span>
                        <span class="d-block mb-4"> <?= $value->desc; ?> </span>
                        <a href="<?= $value->link; ?>" target="_blank"> <i class="fas fa-link fa-lg d-block"></i> </a>
                    </div>
                </div>

            </div>

        <?php endforeach; ?>

        </div>

    </div>

</section>
<!-- Fim Sessão - Portfólio -->