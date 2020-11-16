<!-- DOCUMENTO HTML 5 -->
<!DOCTYPE html>
<!-- INFORMAR A LÍNGUA QUE SERÁ USADA DO SITE -->
<html lang='pt-br'>

<head>

    <!-- CONJUNTO DE CARACTERES -->
    <meta charset='UTF-8'>

    <!-- VIEWPORT -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- ROBOTS -->
    <meta nam="robots" content="index, follow">

    <!-- SHORTCUT -->
    <link rel="shortcut icon" href="">

    <!-- LINKS CSS -->
    <link rel="stylesheet" href="">
    <!-- TÍTULO DA PÁGINA -->
    <title>APRENDENDO HTML</title>
</head>

<!-- CONTEÚDO EXIBIDO PARA O USUÁRIO -->

<body>

    <!-- links cegos são links que direcionam o usuáiro para uma parte da nossa
    Página, como por exemplo a tag a com href de #home irá levar o usuário até a 
    div com o id home -->

    <!-- Não utilizar páginas com html semândico pode causar uma penalização
    por parte do google por achar que o site está praticando técnicas de 
    black hat
    https://resultadosdigitais.com.br/blog/black-hat/ -->

    <header>
        <!-- logo, menu de navegação -->
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#empresa">Empresa</a></li>
                <li><a href="#quem-somos">Quem somos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <article>
            <header>
                <h1> Os melhores e mais completos cursos de educação profissional do Brasil </h1>
            </header>
        </article>

        <!-- <h2> h2 </h2>
            <h3> h3 </h3>
            <h4> h4 </h4>
            <h5> h5 </h5> -->

        <div>

            <figure>
                <img src="assets/img/ifto.svg" alt="REDE FEDERAL DE EDUCAÇÃO" title="REDE FEDERAL DE EDUCAÇÃO"
                    width="500">
            </figure>
            <figure>
                <img src="assets/img/rede_federal.png" alt="REDE FEDERAL DE EDUCAÇÃO" title="REDE FEDERAL DE EDUCAÇÃO"
                    width="500">
            </figure>

            <audio src="assets/audio/musica.mp3" controls autoplay loop></audio>

            <video src="assets/video/rede_federal.mp4" controls autoplay loop></video>

            <p>
                <!-- MARCAÇÃO DE PARÁGRAFOS -->
                A história da Rede Federal de Educação Profissional, Científica e Tecnológica começou em 1909, quando o
                então
                Presidente da República, Nilo Peçanha, criou 19 escolas de Aprendizes e Artífices que, mais tarde, deram
                origem
                aos
                Centros Federais de Educação Profissional e Tecnológica (Cefets).
            </p>
            <p> Tida no seu início como instrumento de política voltado para as 'classes desprovidas', a Rede Federal se
                configura
                hoje como importante estrutura para que todas as pessoas tenham efetivo acesso às conquistas científicas
                e
                tecnológicas.
            </p>

            <p>Foi na década de 1980 que um novo cenário econômico e produtivo se estabeleceu, com o desenvolvimento de
                novas
                tecnologias, agregadas à produção e à prestação de serviços. Para atender a essa demanda, as
                instituições de
                educação profissional vêm buscando diversificar programas e cursos para elevar os níveis da qualidade da
                oferta.
            </p>

            <p>Cobrindo todo o território nacional, a Rede Federal presta um serviço à nação, ao dar continuidade à sua
                missão
                de
                qualificar profissionais para os diversos setores da economia brasileira, realizar pesquisa e
                desenvolver
                novos
                processos, produtos e serviços em colaboração com o setor produtivo.
            </p>

            <p>Em 29 de dezembro de 2008 , 31 centros federais de educação tecnológica (Cefets), 75 unidades
                descentralizadas
                de ensino (Uneds), 39 escolas agrotécnicas, 7 escolas técnicas federais e 8 escolas vinculadas a
                universidades
                deixaram de existir para formar os Institutos Federais de Educação, Ciência e Tecnologia.
            </p>

            <a href="http://www.ifto.edu.br/araguaina" target="blank" title="Campus Araguaina" alt="Campus Araguaina">
                Campus Araguaina
            </a>

            <h2> Lista de Cursos no IFTO - Campus Araguaína </h2>

            <ul>
                <li>Operador de Computador</li>
                <li>Técnico em Biotecnologia</li>
                <li>Técnico em Informática</li>
                <li>Técnico em Análises Clínicas</li>
                <li>Técnico em Enfermagem</li>
                <li>Técnico em Informática para Internet</li>
                <li>Tecnólogo em Análise e Desenvolvimento de Sistemas</li>
                <li>Gestão em Produção Industrial</li>
                <li>Especialização Lato Sensu em Educação Ambiental e Desenvolvimento Sustentável</li>
            </ul>

            <!-- <ol reversed> -->
            <!-- <ol start='5'> -->
            <!-- <ol type='I'> -->
            <!-- <ol type='A'> -->
            <ol type='a'>
                <li>Operador de Computador</li>
                <li>Técnico em Biotecnologia</li>
                <li>Técnico em Informática</li>

                <ul>
                    <li>Programador WEB</li>
                </ul>

                <li>Técnico em Análises Clínicas</li>
                <li>Técnico em Enfermagem</li>
                <li>Técnico em Informática para Internet</li>
                <li>Tecnólogo em Análise e Desenvolvimento de Sistemas</li>
                <li>Gestão em Produção Industrial</li>
                <li>Especialização Lato Sensu em Educação Ambiental e Desenvolvimento Sustentável</li>
            </ol>
        </div>

    </main>

    <section>
        <header>
            <h1>As mais lindas do site</h1>
        </header>
        <article>
            <h1>Notícia 1</h1>
            <p>Teste descritivo da notícia</p>
        </article>
        <article>
            <h1>Notícia 1</h1>
            <p>Teste descritivo da notícia</p>
        </article>
        <article>
            <h1>Notícia 1</h1>
            <p>Teste descritivo da notícia</p>
        </article>
        <article>
            <h1>Notícia 1</h1>
            <p>Teste descritivo da notícia</p>
        </article>
        <article>
            <h1>Notícia 1</h1>
            <p>Teste descritivo da notícia</p>
        </article>
    </section>





    <div id="home"></div>
    <!-- SCRIPT JS -->
    <script></script>
</body>

</html>