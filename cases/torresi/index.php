<?php $_GET['portfolio'] = true; ?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebPage">
    <title>Torresi Gourmet | Hauz House</title>
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
                    <img src="../../assets/images/portfolio/portfolio-fundo-torresi.jpg" alt="Torresi Gourmet">
                </div>
            </div>
            <div class="sobre-site">
                <div class="container">
                    <h1 class="titulo-sites">
                        Torresi Gourmet
                    </h1>
                    <p class="paragrafo">
                        A Torresi Gourmet é uma empresa dedicada a planejar e executar grandes eventos. Aos toques da requintada Chef Tatiane Torresi e de sua experiência acumulada nos mais diferenciados tipos de evento, contamos com uma infraestrutura completa para oferecer aos nossos clientes a segurança, tranquilidade e qualidade necessária para garantir que suas comemorações, festas e feiras, que vão de simples conferências empresariais aos mais finos e luxuosos casamentos, aconteçam de maneira extraordinária.
                    </p>
                    <div class="lista">
                        <div class="item">
                            Site institucional Responsivo
                        </div>
                    </div>
                    <div class="confira topScroll">
                        <div class="image">
                            <img src="../../assets/images/mockups_devices/torresi.PNG" alt="torresi">
                        </div>
                        <div class="text">
                            <h2 class="titulo-sites">
                                Sobre o projeto
                            </h2>
                            <p class="paragrafo">
                                O website responsivo da Torresi Gourmet foi desenvolvido utilizando HTML5, CSS3 reformulamos seu design e reestruturamos seu conteúdo para uma melhor visualização em dispositivos mobile.
                            </p>
                            <a href="http://torresigourmet.com.br/" target="_blank" class="botao-b">
                                CONFIRA O SITE <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 16 16">
                                    <path d="M1 9v-2h11v-2l3 3-3 3v-2z"></path>
                                </svg>
                            </a>
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
                        <a href="../soldo/" class="item prev">
                            <span class="case">
                                Case Anterior
                            </span>
                            <span class="nome-loja">
                                Soldo
                            </span>
                        </a>
                        <a href="../" class="item lista">
                            <img src="../../assets/images/lista-portfolio.png" alt="Lista">
                        </a>
                        <a href="../vonolivio/" class="item next">
                            <span class="case">
                                Próximo Case
                            </span>
                            <span class="nome-loja">
                                Canil Von Olivio
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