<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebPage">
<?php require_once '../assets/php/view/head.php' ?>

<body>
    <?php require_once '../assets/php/view/header.php' ?>
    <main>
        <div class="sistemas-web"> <img class="image" src="../assets/images/fundo-sistemas-web.png" alt="Sitemas Web">
            <div class="box">
                <h1 class="titulo-topo">
                    Sistemas Web
                </h1>
                <p class="descricao-topo"> Cuide da ideia, nós cuidamos do desenvolvimento. </p>
                <div class="mocukp"> <img src="../assets/images/painel.png" alt="Painel"> </div>
            </div>
        </div>
        <div class="header-fixo">
            <div class="container">
                <div class="box">
                    <div class="logo">
                        <a href="../"> Hauz House </a>
                    </div>
                    <div class="navegacao">
                        <?php include '../assets/php/view/menu.php' ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sites-section sua-empresa first">
            <div class="container topo">
                <h2 class="titulo-sites topScroll">
                    Sua empresa necessita de um projeto específico?
                </h2>
                <p class="paragrafo topScroll"> Tem uma ideia de solução online e precisa que seja implementada, deixe
                    que nós iremos analisar, planejar e desenvolver a melhor solução para sua empresa. </p>
            </div>
            <div class="container intranet topScroll">
                <div class="texto padding topScroll">
                    <div class="box">
                        <h2 class="titulo-sites">
                            Intranets e Extranets
                        </h2>
                        <p class="paragrafo"> Desenvolvimento de sistemas web para conectar empresas e colaboradores,
                            gestão de RH, processos internos, reuniões e mais o que desejar. </p>
                    </div>
                </div>
                <div class="image">
                    <div class="box"> <img src="../assets/images/instranets.png" alt="Intranets e Extranets"> </div>
                </div>
            </div>
        </div>
        <div class="sites-section solucoes topScroll">
            <div class="container">
                <div class="texto padding">
                    <div class="box">
                        <h2 class="titulo-sites">
                            Soluções via API
                        </h2>
                        <p class="paragrafo"> Utilizamos api de serviços para construir aplicações ricas para Web, desde
                            o desenvolvimento de relatórios até soluções de pagamento recorrente. </p>
                    </div>
                </div>
                <div class="image">
                    <div class="box"> <img src="../assets/images/solucoes-via-api.png" alt="Soluções via API"> </div>
                </div>
            </div>
        </div>
        <!--
            <div class="tecnologias">
                <div class="container">
                    <h2 class="titulo-sites center topScroll">
                        Tecnologias
                    </h2>
                    <p class="sub-title topScroll"> Utilizamos as melhores tecnologias para seu projeto </p>
                    <div class="lista-tecnologias">
                        <div class="item topScroll"> <img src="../assets/images/ic-php.png" alt="PHP"> </div>
                        <div class="item topScroll"> <img src="../assets/images/ic-html5.png" alt="HTML5"> </div>
                        <div class="item topScroll"> <img src="../assets/images/ic-css3.png" alt="CSS3"> </div>
                        <div class="item topScroll"> <img src="../assets/images/ic-js.png" alt="Javascript"> </div>
                        <div class="item topScroll"> <img src="../assets/images/ic-doctrine.png" alt="Doctrine"> </div>
                        <div class="item topScroll"> <img src="../assets/images/ic-mysql.png" alt="My SQL"> </div>
                        <div class="item topScroll"> <img src="../assets/images/ic-jquery.png" alt="jQuery"> </div>
                        <div class="item topScroll"><img src="assets/images/ic-angular.png" alt="Angular"></div>
                        <div class="item topScroll"> <img src="../assets/images/ic-amazon.png" alt="Amazon web services"> </div>
                    </div>
                </div>
            </div>
            -->
        <div class="conversar-footer" id="contato">
            <?php require_once '../assets/php/view/form.php' ?>
        </div>
        <div class="sombra-full"></div>
        <div class="msg-form">
            <div class="balao">
                <div class="icon"></div>
                <div class="titulo"> </div>
            </div>
        </div>
    </main>
    <?php require_once '../assets/php/view/footer.php' ?>
</body>

</html>