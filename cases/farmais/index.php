<?php $_GET['portfolio'] = true; ?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebPage">
    <title>Farmais | Hauz House</title>
    <?php require_once '../../assets/php/view/head-portfolio.php' ?>

    <body style="background-color: #f3f3f3;">
        <?php require_once '../../assets/php/view/header.php' ?>
        <main>
            <div class="header-fixo">
                <div class="container">
                    <div class="box">
                        <div class="logo">
                            <a href="../../">
                                Hauz House
                            </a>
                        </div>
                        <div class="navegacao">
                            <?php require_once '../../assets/php/view/menu.php' ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topo-portfolio active">
                <div class="image">
                    <img src="../../assets/images/portfolio/portfolio-fundo-farmais.jpg" alt="Allyotta">
                </div>
            </div>
            <div class="sobre-site">
                <div class="container">
                    <h1 class="titulo-sites">
                        Farmais
                    </h1>
                    <p class="paragrafo">
                        A rede Drogarias Farmais iniciou suas atividades em 1994 e hoje é a maior rede de drogarias do país regida pelo sistema de franquia. Em 2009, a Farmais passou a fazer parte do Grupo Brasil Pharma, holding do segmento de varejo farmacêutico do Grupo BTG Pactual, que administra outras redes de drogarias: Rosário (Centro-Oeste), Sant´Ana (nordeste) e Big Ben (norte).
                    </p>
                    <div class="lista">
                        <div class="item">
                            Aplicativo
                        </div>
                    </div>
                    <div class="confira topScroll">
                        <div class="image">
                            <img src="../../assets/images/mockups_devices/farmais.PNG" alt="Allyotta">
                        </div>
                        <div class="text">
                            <h2 class="titulo-sites">
                                Sobre o projeto
                            </h2>
                            <p class="paragrafo">
                                O aplicativo da Farmais foi desenvolvido sobre a plataforma IONIC, Angular, jQuery, e javaScript. Formulamos toda UX & UI e upload para a loja com toda suas burocracias resolvidas.
                            </p>
                            <!-- <a href="https://play.google.com/store/apps/details?id=br.com.farmaisapp.newit target="_blank" class="botao-b">
                                    CONFIRA O APP <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 16 16"><path d="M1 9v-2h11v-2l3 3-3 3v-2z"></path></svg>
                                </a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="desenvolvimento-site topScroll">
                <div class="container">
                    <div class="box">
                        <div class="image">
                            <img src="../../assets/images/portfolio-codigo.png" alt="Desenvolvimento">
                        </div>
                        <div class="text">
                            <h2 class="titulo-sites">
                                Tecnologias
                            </h2>
                            <p class="paragrafo">
                                Algumas das tecnologias que foram utilizadas para o desenvolvimento do projeto.
                            </p>
                            <div class="lista">
                                <div class="item">
                                    <img src="../../assets/images/ic-html5.png" alt="HTML5">
                                </div>
                                <div class="item">
                                    <img src="../../assets/images/ic-css3.png" alt="CSS3">
                                </div>
                                <div class="item">
                                    <img src="../../assets/images/ic-jquery.png" alt="jQuery">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-portfolio topScroll">
                <div class="container">
                    <div class="box">
                        <a href="../ega/" class="item prev">
                            <span class="case">
                                Case Anterior
                            </span>
                            <span class="nome-loja">
                                EGA Solutions
                            </span>
                        </a>
                        <a href="../" class="item lista">
                            <img src="../../assets/images/lista-portfolio.png" alt="Lista">
                        </a>
                        <a href="../fort/" class="item next">
                            <span class="case">
                                Próximo Case
                            </span>
                            <span class="nome-loja">
                                Oficina Fort
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="conversar-footer" id="contato">
                <?php require_once '../../assets/php/view/form.php' ?>
            </div>
        </main>
        <?php require_once '../../assets/php/view/footer.php' ?>
    </body>

</html>