$(document).ready(function() {
    $("#formulario").submit(function(e) {
        e.preventDefault();
        $("#wrapper_hauzhouse").hide();
        $("#instrucoes").hide();
        $("#loading").show();
        $.ajax({
            type: 'POST',
            url: "https://hauzhouse.com/assets/php/send.php",
            data: $('#formulario').serialize(),
            success: function(response) {
                //console.log(response);
                $("#sucesso").show();
                $("#loading").hide();
            },
            error: function(error) {
                console.log(error);
                $("#sucesso").show();
                $("#loading").hide();
            }
        });
    });

    //    paralax fundo
    $(window).scroll(function() {
        if ($(window).scrollTop() < 1500) {
            var scroll = $(window).scrollTop() / 2;
            $(".fundo-video .video").attr("style", "transform: translate3d(-50%, " + scroll + "px, 0)");
        }
        $(".topScroll").each(function() {
            var vh = $(window).height() - 50;
            var top = $(this).offset().top - vh;
            //            var top = $(this).offset().bottom;
            var scrollTop = $(window).scrollTop();
            if (scrollTop > top) {
                $(this).addClass("topScrollActive");
            }
        });
    });

    function scroll() {
        $(".topScroll").each(function() {
            var top = $(this).offset().top - 750;
            var scrollTop = $(window).scrollTop();
            if (scrollTop > top) {
                $(this).addClass("topScrollActive");
            }
        });
    }
    scroll();

    //    menu mobile
    $(".header .menu-mob").click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(".fundo-video .box-texto, .fundo-video .descer").removeClass("active");
        } else {
            $(this).addClass("active");
            $(".fundo-video .box-texto, .fundo-video .descer").addClass("active");
        }
    });
    $(".header .navegacao > ul > li.sub").click(function() {
        if ($(this).parent().hasClass("active")) {
            $(this).parent().removeClass("active");
            $(this).find("ul").removeClass("active");
        } else {
            $(this).parent().addClass("active");
            $(this).find("ul").addClass("active");
        }
    });
    $(".header .navegacao > ul > li.sub ul").prepend("<li class='voltar'><a class='no' href=''>Voltar</a></li>")
    $(".header .navegacao > ul > li.sub > a, .header .navegacao > ul > li a.no").click(function(e) {
        if ($("body").width() < 992) {
            e.preventDefault();
        }
    });
    $(".fundo-video .box-texto .solucoes .text:first").addClass("active");

    function solucoes() {
        var totalMsg = $(".fundo-video .box-texto .solucoes .text:last").index();
        if ($(".fundo-video .box-texto .solucoes .text.active").index() == totalMsg) {
            $(".fundo-video .box-texto .solucoes .text.active").removeClass("active");
            $(".fundo-video .box-texto .solucoes .text:first").addClass("active");
        } else {
            $(".fundo-video .box-texto .solucoes .text.active").removeClass("active").next().addClass("active");
        }
        $(".fundo-video .box-texto .solucoes .text.active");
    }
    setInterval(solucoes, 6000);
    //    descer mouse
    $(".fundo-video .descer .mouse").click(function() {
        var heightFundo = $(".fundo-video").height();
        $("html, body").animate({
            scrollTop: heightFundo
        }, 200);
    });

    $(window).scroll(function() {
        var heightFundo = $(".fundo-video").height();
        if ($(window).scrollTop() >= 761 && $(window).width() > 991) {
            $(".header-fixo").addClass("active");
        } else {
            $(".header-fixo").removeClass("active");
        }
    });
    $('.navegacao li a.descer').on('click', function() {
        obj = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(obj).offset().top
        }, 500);
        return false;
    });

    function escrever() {
        var total = 0;
        var ecreveEncatam = setInterval(encatam, 150);

        function encatam() {
            var numero = $(".portfolio .title .palavra.encatam span:last").index() + 8;
            $(".portfolio .title .palavra.encatam span:eq(" + total + ")").addClass("active");
            total++;
            if (total > numero) {
                clearInterval(ecreveEncatam);
                var ecreveEncatamApaga = setInterval(apaga, 150);

                function apaga() {
                    $(".portfolio .title .palavra.encatam span:eq(" + total + ")").removeClass("active");
                    total--;
                    if (total < 0) {
                        clearInterval(ecreveEncatamApaga);
                        total = 0;
                        ecreveConvertem = setInterval(convertem, 150);
                    }
                }
            }
        }

        function convertem() {
            var numero = $(".portfolio .title .palavra.convertem span:last").index() + 8;
            $(".portfolio .title .palavra.convertem span:eq(" + total + ")").addClass("active");
            total++;
            if (total > numero) {
                clearInterval(ecreveConvertem);
                var ecreveEncatamApaga = setInterval(apaga, 150);

                function apaga() {
                    $(".portfolio .title .palavra.convertem span:eq(" + total + ")").removeClass("active");
                    total--;
                    if (total < 0) {
                        clearInterval(ecreveEncatamApaga);
                        total = 0;
                        ecreveSeduzem = setInterval(seduzem, 150);
                    }
                }
            }
        }

        function seduzem() {
            var numero = $(".portfolio .title .palavra.seduzem span:last").index() + 8;
            $(".portfolio .title .palavra.seduzem span:eq(" + total + ")").addClass("active");
            total++;
            if (total > numero) {
                clearInterval(ecreveSeduzem);
                var ecreveEncatamApaga = setInterval(apaga, 150);

                function apaga() {
                    $(".portfolio .title .palavra.seduzem span:eq(" + total + ")").removeClass("active");
                    total--;
                    if (total < 0) {
                        clearInterval(ecreveEncatamApaga);
                        total = 0;
                        ecreveEncatam = setInterval(encatam, 150);
                    }
                }
            }
        }
    }
    escrever();

    function orcamento() {
        var alturaJanela = $(".form-contato .overflow").height();
        var titulo = $(".form-contato .title").outerHeight();
        var descricao = $(".form-contato .sub-title").outerHeight();
        var block1 = $("#formulario .block:eq(0)").outerHeight() - 40;
        var block2 = $("#formulario .block:eq(1)").outerHeight() + 5;
        var totalblock1 = titulo + descricao + block1;
        var totalblock2 = titulo + descricao + block1 + block2;
        $("#formulario .item-block .box-item").click(function() {
            $(this).parents(".block").next().addClass("active");
            if (!$(this).parents(".block").prev().hasClass("block")) {
                $(".form-contato .overflow").animate({
                    scrollTop: totalblock1
                });
            } else {
                $(".form-contato .overflow").animate({
                    scrollTop: totalblock2
                });
            }
            if ($(".formulario").hasClass("branco")) {
                var scrollblock = $(this).parents(".block").next().offset().top - 100;
                $("body, html").animate({
                    scrollTop: scrollblock
                });
            }
        });
    }
    orcamento();
});

/* Máscaras ER */
function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}

function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}

function mtel(v) {
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}

function id(el) {
    return document.getElementById(el);
}