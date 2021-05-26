<?php $_GET['portfolio'] = true; ?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebPage">
    <title>EGA Solutions | Hauz House</title>
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
                    <img src="../../assets/images/portfolio/portfolio-fundo-ega.jpg" alt="Allyotta">
                </div>
            </div>
            <div class="sobre-site">
                <div class="container">
                    <h1 class="titulo-sites">
                        EGA Solutions
                    </h1>
                    <p class="paragrafo">
                        O Grupo EGA atua no mercado de Comércio Exterior, Logística Portuária e de Recintos Alfandegados, se destacando pela inteligência e criatividade em buscar alternativas e soluções operacionais.
                    </p>
                    <div class="lista">
                        <div class="item">
                            Integração CRM (PipeDrive)
                        </div>
                    </div>
                    <div class="confira topScroll">
                        <div class="image">
                            <img src="../../assets/images/mockups_devices/ega.PNG" alt="Allyotta">
                        </div>
                        <div class="text">
                            <h2 class="titulo-sites">
                                Sobre o projeto
                            </h2>
                            <p class="paragrafo">
                                O website responsivo da EGA foi desenvolvido sobre CMS proprio. Reformulamos seu design e reestruturamos seu conteúdo para uma melhor visualização em dispositivos mobile.
                            </p>
                            <a href="http://www.egasolutions.com.br/" target="_blank" class="botao-b">
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
                        <a href="../dumax/" class="item prev">
                            <span class="case">
                                Case Anterior
                            </span>
                            <span class="nome-loja">
                                Dumax
                            </span>
                        </a>
                        <a href="../" class="item lista">
                            <img src="../../assets/images/lista-portfolio.png" alt="Lista">
                        </a>
                        <a href="../farmais/" class="item next">
                            <span class="case">
                                Próximo Case
                            </span>
                            <span class="nome-loja">
                                Farmais
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="conversar-footer" id="contato">
                <div class="formulario branco">
                    <div class="container">
                        <h2 class="title topScroll">
                            Vamos Conversar?
                        </h2>
                        <p class="sub-title topScroll">
                            Preencha o nosso formulário que em breve entraremos em contato
                        </p>
                        <div id="mauticform_wrapper_sugarmedia" class="mauticform_wrapper">
                            <form autocomplete="false" role="form" method="post" action="" id="mauticform_sitenetzee" data-mautic-form="sitenetzee">
                                <div class="mauticform-error" id="mauticform_sitenetzee_error"></div>
                                <div class="mauticform-message" id="mauticform_sitenetzee_message"></div>
                                <div class="mauticform-innerform">
                                    <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">
                                        <div class="block active">
                                            <div class="title-block"><span class="number">1</span> Como podemos ajudar você?</div>
                                            <div id="mauticform_sitenetzee_como_podemos_ajudar_voce" data-validate="como_podemos_ajudar_voce" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-8 mauticform-required row">
                                                <div class="item-block">
                                                    <input type="radio" id="novo" name="mauticform[como_podemos_ajudar_voce]" value="Novo E-commerce">
                                                    <label for="novo" class="box-item">
                                                        <div class="box-center">
                                                            <div class="opcao">Novo e-commerce</div>
                                                            <div class="description">Quero criar minha primeira loja virtual.</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="item-block">
                                                    <input type="radio" id="melhorar" name="mauticform[como_podemos_ajudar_voce]" value="Melhorar meu e-commerce">
                                                    <label for="melhorar" class="box-item">
                                                        <div class="box-center">
                                                            <div class="opcao">Melhorar meu e-commerce</div>
                                                            <div class="description">Quero melhorar minha loja virtual ou mudar de plataforma.</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="item-block">
                                                    <input id="criar" type="radio" name="mauticform[como_podemos_ajudar_voce]" value="Criar ou melhorar meu web site">
                                                    <label for="criar" class="box-item">
                                                        <div class="box-center">
                                                            <div class="opcao">Criar ou melhorar meu Website</div>
                                                            <div class="description">Pretendo criar um melhorar meu web site.</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="item-block">
                                                    <input id="outro" type="radio" name="mauticform[como_podemos_ajudar_voce]" value="Outros Serviços">
                                                    <label for="outro" class="box-item">
                                                        <div class="box-center">
                                                            <div class="opcao">Outros Serviços</div>
                                                            <div class="description">Quero um projeto personalizado. (Layouts, Banners, SEO, Marketing Digital, Programação, Blog)</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="title-block"><span class="number">2</span> Como você classifica o tamanho do seu projeto?</div>
                                            <div id="mauticform_sitenetzee_como_voce_classifica_o_ta" data-validate="como_voce_classifica_o_ta" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-9 mauticform-required row">
                                                <div class="item-block">
                                                    <input required id="muito-pequeno" type="radio" name="mauticform[como_voce_classifica_o_ta]" value="Muito Pequeno">
                                                    <label for="muito-pequeno" class="box-item">
                                                        <div class="box-center">
                                                            <div class="opcao">Muito Pequeno</div>
                                                            <div class="description">Estou iniciando e quero fazer um teste.</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="item-block">
                                                    <input required id="pequeno" type="radio" name="mauticform[como_voce_classifica_o_ta]" value="Pequeno">
                                                    <label for="pequeno" class="box-item">
                                                        <div class="box-center">
                                                            <div class="opcao">Pequeno</div>
                                                            <div class="description">Sou um pequeno empresário, quero uma solução básica.</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="item-block">
                                                    <input required id="medio" type="radio" name="mauticform[como_voce_classifica_o_ta]" value="Médio">
                                                    <label for="medio" class="box-item">
                                                        <div class="box-center">
                                                            <div class="opcao">Médio</div>
                                                            <div class="description">Estou bem estabelicido e desejo ampliar meu negócio.</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="item-block">
                                                    <input required id="grande" type="radio" name="mauticform[como_voce_classifica_o_ta]" value="Grande">
                                                    <label for="grande" class="box-item">
                                                        <div class="box-center">
                                                            <div class="opcao">Grande</div>
                                                            <div class="description">Faço parte de uma grande empresa e queremos um projeto diferenciado.</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="title-block"><span class="number">3</span> Conte-nos mais sobre seu projeto.</div>
                                            <div class="campos row">
                                                <div class="item">
                                                    <label id="mauticform_sitenetzee_nome" data-validate="nome" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required required">
                                                        <input id="mauticform_input_sugarmedia_nome" name="mauticform[nome]" value="" class="mauticform-input" type="text" placeholder="* Seu Nome:" required="required" />
                                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <label id="mauticform_sitenetzee_email" data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-2 mauticform-required required">
                                                        <input type="email" name="mauticform[email]" id="mauticform_input_sugarmedia_email" placeholder="* Seu E-mail:" class="mauticform-input" required="required">
                                                        <span class="mauticform-errormsg" style="display: none;">Informe um e-mail valido.</span>
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <label id="mauticform_sitenetzee_fone" data-validate="fone" data-validation-type="tel" class="mauticform-row mauticform-tel mauticform-field-3 mauticform-required required">
                                                        <input id="mauticform_input_sugarmedia_fone" type="tel" name="mauticform[fone]" placeholder="* Seu Celular:" maxlength="15" class="mauticform-input" required="required">
                                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <label id="mauticform_sitenetzee_empresa_ou_url_site" data-validate="empresa_ou_url_site" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-5 mauticform-required required">
                                                        <input id="mauticform_input_sugarmedia_empresa_ou_url_site" type="text" name="mauticform[empresa_ou_url_site]" placeholder="* Empresa:" class="mauticform-input" required="required">
                                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <label id="mauticform_sitenetzee_informe_o_seu_cargo" data-validate="informe_o_seu_cargo" data-validation-type="select" class="mauticform-row mauticform-select mauticform-field-6 mauticform-required required">
                                                        <select required="required" id="mauticform_input_sugarmedia_informe_o_seu_cargo" name="mauticform[informe_o_seu_cargo]" class="mauticform-selectbox">
                                                            <option value="">* Informe o seu cargo</option>
                                                            <option value="Sócio - CEO">Sócio/CEO</option>
                                                            <option value="Diretor">Diretor</option>
                                                            <option value="Gerente - Coordenador de Marketing">Gerente/Coordenador de Marketing</option>
                                                            <option value="Gerente - Coordenador de Vendas">Gerente/Coordenador de Vendas</option>
                                                            <option value="Analista de marketing">Analista de marketing</option>
                                                            <option value="Estagiário">Estagiário</option>
                                                            <option value="Estudante">Estudante</option>
                                                            <option value="Outros Cargos">Outros Cargos</option>
                                                        </select>
                                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <label id="mauticform_sitenetzee_faturamento_real_ou_esper" data-validate="faturamento_real_ou_esper" data-validation-type="select" class="mauticform-row mauticform-select mauticform-field-7 mauticform-required required">
                                                        <select required="required" id="mauticform_input_sugarmedia_faturamento_real_ou_esper" name="mauticform[faturamento_real_ou_esper]" class="mauticform-selectbox">
                                                            <option value="">* Faturamento mensal real ou esperado</option>
                                                            <option value="10000">Até R$ 10.000,00</option>
                                                            <option value="10000-50000">R$ 10.000,00 a R$ 50.000,00</option>
                                                            <option value="50000-100000">R$ 50.000,00 a R$ 100.000,00</option>
                                                            <option value="100000-300000">R$ 100.000,00 a R$ 300.000,00</option>
                                                            <option value="300000-500000">R$ 300.000,00 a R$ 500.000,00</option>
                                                            <option value="500000-1000000">R$ 500.000,00 a R$ 1.000.000,00</option>
                                                            <option value="+1000000">Acima de R$ 1.000.000,00</option>
                                                        </select>
                                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <label id="mauticform_sitenetzee_mensagem" data-validate="mensagem" data-validation-type="textarea" class="mauticform-row mauticform-text mauticform-field-4 mauticform-required required">
                                                        <div class="msg-cadastro">É importante que você detalhe informações sobre seu projeto <small>(O que será necessário no projeto, Sites de referência, concorrentes, público alvo e outras informações relevantes)</small></div>
                                                        <textarea required="required" id="mauticform_input_sugarmedia_mensagem" autocomplete="off" class="mauticform-textarea" rows="4" name="mauticform[mensagem]" placeholder="* Mensagem:"></textarea>
                                                        <span class="mauticform-errormsg" style="display: none;">Isso é obrigatório.</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="mauticform_sitenetzee_historico_navegacao" class="mauticform-row mauticform-text mauticform-field-10" style="display: none !important;">
                                                <textarea id="mauticform_input_sugarmedia_historico_navegacao" name="mauticform[historico_navegacao]" class="mauticform-textarea">https://www.netzee.com.br/portfolio/cnc-ferramentas/</textarea>
                                            </div>
                                            <div id="mauticform_sitenetzee_enviar_mensagem" class="mauticform-row mauticform-button-wrapper mauticform-field-10 enviar">
                                                <button id="mauticform_input_sugarmedia_enviar_mensagem" type="submit" name="mauticform[enviar_mensagem]" class="botao-b submit mauticform-button botao-b submit" value="1" onclick="goog_report_conversion(window.location);">
                                                    Encaminhar solicitação de orçamento <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 16 16">
                                                        <path d="M1 9v-2h11v-2l3 3-3 3v-2z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sombra-full"></div>
            <div class="msg-form">
                <div class="balao">
                    <div class="icon"></div>
                    <div class="titulo">
                    </div>
                </div>
            </div>
        </main>
        <?php require_once '../../assets/php/view/footer.php' ?>
    </body>

</html>