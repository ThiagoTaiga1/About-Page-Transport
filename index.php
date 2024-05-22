<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/fontawesome.min.css">
    <link rel="stylesheet" href="styles/font-awesome.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>About Page Transport | Porto Alegre </title>
    <meta charset="UTF-8">
    <meta name="keywords" content="marketing digital, agência, automação de marketing">
    <meta name="author" content="Thiago Oliveira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">

</head>

<body>
    <header>
        <div class="container">
            <div class="menu-topo">
                <div class="logo">
                    <h3>Jaeger Express</h3>
                </div>
                <nav class="desktop">
                    <ul>
                        <li><a href="">Sobre<a></li>
                        <li><a href="">Serviços<a></li>
                        <li><a href="">Contato<a></li>
                        <li class="btn-nav"><a href="">Consultar Meu Pedido</a></li>
                    </ul>

                </nav>
                <!--desktop-->
                <nav class="mobile">
                    <h3><i class="fa fa-bars"></i></h3>
                    <ul>
                        <li><a href="">Sobre<a></li>
                        <li><a href="">Serviços<a></li>
                        <li><a href="">Contato<a></li>
                        <li class="btn-nav"><a href="">Consultar Meu Pedido</a></li>
                    </ul>
                </nav>
                <!--mobile-->
                <div class="clear"></div>
            </div>
            <!--menu-topo-->
            <div class="chamada-header">
                <h2>Transportamos Seus Sonhos<br /> Com Responsabilidade</h2>
                <p>Transporte e Automação</p>
                <form>
                    <input type="email" requered="" placeholder="Digite aqui o código do pedido ...">
                    <input type="submit" name="acao" value="Procurar Pedido">
                </form>
            </div>
            <!--chamada-->
        </div>
        <!--container-->



    </header>
    <section class="descricao-jaeger">
        <div class="container"></div>
        <p>Desde 1997, o time <b>Jaeger</b> têm atuado com dinamismo e eficiência no segmento de transporte de cargas;
            Em 2004 já atendíamos uma rede varejista de grande renome no estado, que foi adquirida por uma das maiores
            empresas do Brasil no ramo do varejo de móveis e eletro-eletrônicos, onde prestamos serviços até os dias de
            hoje.</p>

    </section>
    <section class="descricao-jaeger2">
        <div class="container">
            <div class="texto-descricao">
                <h3>A Jaeger Express tem cerca de 80 colaboradores, dentre eles, gerentes, assistentes e auxiliares
                    administrativos, motoristas, auxiliares de carga e descarga, entregadores e auxiliares de serviços
                    gerais.</h3>
                <p>A empresa conta com uma frota própria de 32 caminhões e está localizada na região metropolitana de
                    Porto Alegre /RS, na cidade de Cachoeirinha, com acesso as principais rodovias (BR 290 Free way, RS
                    020, RS 040, RS 118, BR 116), e com fácil deslocamento em toda a região para distribuição das
                    mercadorias.</p>
            </div>
            <img alt="Trabalho Jaeger" title="Trabalho Jaeger" src="assets/images/mockape.jpg">
        </div>
    </section>
    <!--jaeger3-->
    <section class="descricao-jaeger3">
        <div class="container">
            <div class="box-depoimento">
                <p><b>SEGURANÇA</b></p><br />
                <p>Para prevenção de sinistros em nosso depósito, temos a utilização de monitoramento de sistema
                    integrado de proteção 24 horas, com índice zero de ocorrências desde o início de nossas atividades.
                </p>
            </div>
            <!--container-->
        </div>
        <!--box-depoimento-->
    </section>
    <section class="empresas">
        <div class="container">
            <div class="title-empresas">
                <h3>Empresas Parceiras<br /><i class="fa fa-angle-down"></i></h3>
            </div>
            <div class="flex-empresas">
                <div class="box-empresas">
                    <img src="assets/images/magalu.jpg" />
                    <div class="box-empresas-wraper">
                        <h2>Magazine Luiza</h2>
                        <p>O Magazine Luiza é uma rede varejista de eletrônicos e móveis brasileira, fundada em 1957 na
                            cidade de Franca pelo casal Pelegrino José Donato e sua esposa Luiza Trajano Donato</p>
                        <a href="#">Ir Ao Site</a>
                    </div><!--box-empreas-wraper-->
                </div><!--box-empresas-->

                <div class="box-empresas">
                    <img src="assets/images/download.png" />
                    <div class="box-empresas-wraper2">
                        <h2>PontoFrio</h2>
                        <p>Pontofrio é uma rede varejista brasileira, fundada em 1946 no Rio de Janeiro pelo imigrante
                            romeno Alfredo João Monteverde, que oferece para venda em suas lojas produtos como móveis,
                            eletrodomésticos e eletrônicos.</p>
                        <a href="#">Ir Ao Site</a>
                    </div><!--box-empreas-wraper-->
                </div><!--box-empresas-->

                <div class="box-empresas">
                    <img src="assets/images/logobaiha.png" />
                    <div class="box-empresas-wraper3">
                        <h2>Casas Bahia</h2>
                        <p>Casas Bahia é uma popular rede de varejo de móveis e eletrodomésticos do Brasil. Foi fundada
                            em 1952, em São Caetano do Sul, São Paulo, onde se localiza a matriz, pelo imigrante polonês
                            Samuel Klein</p>
                        <a href="#">Ir Ao Site</a>
                    </div><!--box-empreas-wraper-->
                </div><!--box-empresas-->
            </div><!--flex-empresas-->
    </section>
    <!--empreasas-->


    <script src="js/jquery.js"></script>
    <script>
        $('nav.mobile h3').click(function () {
            $('nav.mobile').find('ul').slideToggle();
        })
    </script>
</body>

</html>