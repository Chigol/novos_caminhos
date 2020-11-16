<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Site do Curso</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <a href="#">
            <img src="assets/img/ifto.svg" alt="logotipo do curso" title="logotipo do curso" width="500">
        </a>

        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#escola">Escola</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <!-- Fim cabeçalho -->

    <main>
        <!-- chamada Principal -->
        <article>
            <header>
                <h1>Aqui você aprende o essencial para trabalhar como webmaster fullstack</h1>
                <p>
                    Aqui você encontra os artigos necessários para auxiliar na sua caminhada na web
                </p>
                <p>
                    Estude o HTML 5 e o CSS 3 na disciplina de webdesign
                </p>
                <p>
                    <a href="#" class="btn">Saiba mais</a>
                </p>
            </header>
        </article>
        <!-- fim chamada principal -->

        <!-- Artigos -->
        <section>
            <header>
                <h1>
                    Nossos útilmos artigos
                </h1>
            </header>

            <?php for($i = 0; $i < 12; $i++): ?>
            <article>
                <a href="#">
                    <img src="assets/img/rede_federal.png" alt="Rede Federal" title="Rede Federal">
                </a>
                <p>Categoria</p>
                <h2>
                    Voluptate repudiandae in praesentium dolore sunt aut eveniet nemo. Praesentium ipsa est provident
                    eius veniam quod. Accusantium eos nulla est. Quam qui repudiandae quisquam quos et sint et. Sed nisi
                    ratione et corporis repellat rerum saepe. Ut aut et sit nemo et pariatur.
                </h2>
            </article>
            <?php endfor; ?>

        </section>
        <!-- Fim artigos -->

        <!-- NEWS -->
        <article>
            <header>
                <h1>Quer receber todas as novidades em seu e-mail?</h1>
                <p>
                    Informe seu nome e e-mail no campo ao lado e clique em OK !
                </p>
            </header>

            <form action="" method="post"></form>
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu email" required>

            <button type="submit">Enviar</button>
        </article>
        <!-- Fim NEWS -->

        <!-- Sobre o curso -->
        <section>
            <header>
                <img src="assets/img/logo.png" alt="Programador Web" title="Programador Web">
                <h1>Curso de programação WEB</h1>
                <p>
                    Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus projetos e entregar página que estejam
                    dentro dos padrões web seguindo boas práticas de programação
                </p>
            </header>

            <article>
                <header>
                    <h2></h2>
                </header>
            </article>
        </section>
        <!-- Fim sobre o curso -->
    </main>

    <footer>

    </footer>
</body>

</html>