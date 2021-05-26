<div class="formulario branco">
    <div class="container">
        <h2 class="title">
            Vamos Conversar?
        </h2>
        <p class="sub-title">
            <span id="instrucoes">Preencha o nosso formulário que em breve entraremos em contato</span>
            <span id="sucesso" style="display:none;">Obrigado! Já Recebemos sua solitação e em breve entraremos em contato</span>
        </p>
        <i id="loading" style="display: none" class="fa fa-spinner fa-pulse"></i>
        <div id="wrapper_hauzhouse" class="wrapper">
            <form autocomplete="false" role="form" method="post" action="" id="formulario">
                <div class="innerform">
                    <div class="page-wrapper page-1">
                        <div class="block active">
                            <div class="title-block">
                                <span class="number">1</span> Como podemos ajudar você?
                            </div>
                            <div id="hauzhouse_como_podemos_ajudar_voce" class="row text field-8 required row">
                                <div class="item-block">
                                    <input type="radio" id="novo" name="como_podemos_ajudar_voce" value="Novo E-commerce">
                                    <label for="novo" class="box-item">
                                        <div class="box-center">
                                            <div class="opcao">Novo e-commerce</div>
                                            <div class="description">Quero criar minha primeira loja virtual.</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="item-block">
                                    <input type="radio" id="melhorar" name="como_podemos_ajudar_voce" value="Melhorar meu e-commerce">
                                    <label for="melhorar" class="box-item">
                                        <div class="box-center">
                                            <div class="opcao">Melhorar meu e-commerce</div>
                                            <div class="description">Quero melhorar minha loja virtual ou mudar de plataforma.</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="item-block">
                                    <input id="criar" type="radio" name="como_podemos_ajudar_voce" value="Criar ou melhorar meu web site">
                                    <label for="criar" class="box-item">
                                        <div class="box-center">
                                            <div class="opcao">Criar ou melhorar meu Website</div>
                                            <div class="description">Pretendo criar um melhorar meu web site.</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="item-block">
                                    <input id="outro" type="radio" name="como_podemos_ajudar_voce" value="Outros Serviços">
                                    <label for="outro" class="box-item">
                                        <div class="box-center">
                                            <div class="opcao">Outros Serviços</div>
                                            <div class="description">Quero um projeto personalizado. (Layouts, Banners, SEO, Marketing Digital, Programação, Blog)</div>
                                        </div>
                                    </label>
                                </div> <span class="errormsg" style="display: none;">Isso é obrigatório.</span>
                            </div>
                        </div>
                        <div class="block">
                            <div class="title-block"><span class="number">2</span> Como você classifica o tamanho do seu projeto?</div>
                            <div id="hauzhouse_como_voce_classifica" data-validate="como_voce_classifica" data-validation-type="text" class="row text field-9 required row">
                                <div class="item-block">
                                    <input required id="muito-pequeno" type="radio" name="como_voce_classifica" value="Muito Pequeno">
                                    <label for="muito-pequeno" class="box-item">
                                        <div class="box-center">
                                            <div class="opcao">Muito Pequeno</div>
                                            <div class="description">Estou planejando/iniciando e quero fazer um teste.</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="item-block">
                                    <input required id="pequeno" type="radio" name="como_voce_classifica" value="Pequeno">
                                    <label for="pequeno" class="box-item">
                                        <div class="box-center">
                                            <div class="opcao">Pequeno</div>
                                            <div class="description">Sou um pequeno empresário, quero uma solução básica.</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="item-block">
                                    <input required id="medio" type="radio" name="como_voce_classifica" value="Médio">
                                    <label for="medio" class="box-item">
                                        <div class="box-center">
                                            <div class="opcao">Médio</div>
                                            <div class="description">Estou bem estabelicido e desejo ampliar meu negócio.</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="item-block">
                                    <input required id="grande" type="radio" name="como_voce_classifica" value="Grande">
                                    <label for="grande" class="box-item">
                                        <div class="box-center">
                                            <div class="opcao">Grande</div>
                                            <div class="description">Faço parte de uma grande empresa e queremos um projeto diferenciado.</div>
                                        </div>
                                    </label>
                                </div> <span class="errormsg" style="display: none;">Isso é obrigatório.</span>
                            </div>
                        </div>
                        <div class="block">
                            <div class="title-block"><span class="number">3</span> Conte-nos mais sobre seu projeto.</div>
                            <div class="campos row">
                                <div class="item">
                                    <label id="hauzhouse_nome" data-validate="nome" data-validation-type="text" class="mauticform-row text field-1 required required">
                                        <input id="input_hauzhouse_nome" name="nome" value="" class="input" type="text" placeholder="* Seu Nome:" required="required" /> <span class="errormsg" style="display: none;">Isso é obrigatório.</span> </label>
                                </div>
                                <div class="item">
                                    <label id="hauzhouse_email" data-validate="email" data-validation-type="email" class="mauticform-row email field-2 required required">
                                        <input type="email" name="email" id="input_hauzhouse_email" placeholder="* Seu E-mail:" class="input" required="required"> <span class="errormsg" style="display: none;">Informe um e-mail valido.</span> </label>
                                </div>
                                <div class="item">
                                    <label id="hauzhouse_fone" data-validate="fone" data-validation-type="tel" class="mauticform-row tel field-3 required required">
                                        <input id="input_hauzhouse_fone" type="tel" name="fone" placeholder="* Seu Celular:" maxlength="15" class="input" required="required"> <span class="errormsg" style="display: none;">Isso é obrigatório.</span> </label>
                                </div>
                                <div class="item">
                                    <label id="hauzhouse_mensagem" data-validate="mensagem" data-validation-type="textarea" class="mauticform-row text field-4 required required">
                                        <div class="msg-cadastro">É importante que você detalhe informações sobre seu projeto <small>(O que será necessário no projeto, Sites de referência, concorrentes, público alvo e outras informações relevantes)</small></div>
                                        <textarea required="required" id="input_hauzhouse_mensagem" autocomplete="off" class="textarea" rows="4" name="mensagem" placeholder="* Mensagem:"></textarea> <span class="errormsg" style="display: none;">Isso é obrigatório.</span>
                                    </label>
                                </div>
                            </div>
                            <div id="hauzhouse_enviar_mensagem" class="row button-wrapper field-10 enviar">
                                <button id="input_hauzhouse_enviar_mensagem" type="submit" name="enviar_mensagem" class="botao-b submit button botao-b submit" value="1"> Encaminhar solicitação de orçamento
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>