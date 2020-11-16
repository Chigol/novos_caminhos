<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>

<body>
    <main>
        <form action="" method="post">
            <fieldset>
                <legend>
                    Meu formulário
                </legend>
                <p>
                    Insira seu nome: <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" required>
                </p>
                <p>
                    Insira seu email: <input type="email" name="email" id="email" placeholder="Digite o seu email"
                        required>
                </p>
                <p>
                    Insira seu senha: <input type="password" name="senha" id="senha" placeholder="Digite sua senha"
                        required>
                </p>
                <p>
                    Insira sua tecnologia preferida: <br>
                    <input type="checkbox" name="HTML" id="HTML">HTML 5
                    <input type="checkbox" name="CSS3" id="CSS3">CSS 3
                    <input type="checkbox" name="JS" id="JS">JS
                    <input type="checkbox" name="PHP8" id="PHP8">PHP 8
                    <input type="radio" name="sexo" id="sexo" required>Masculino
                </p>

                <p>
                    Insira o arquivo: <input type="file" name="file" id="file">
                </p>
                <p>
                    Informe uma url: <input type="url" name="url" id="url" required>
                </p>
                <p>
                    Range: <input type="range" name="range" id="range">
                </p>
                <p>
                    Selecione um curso <br>
                    <select name="curso" id="curso">
                        <optgroup label="Grupo1">
                            <option value="">Grupo 1.1</option>
                            <option value="">Grupo 1.2</option>
                        </optgroup>
                        <optgroup label="Grupo2">
                            <option value="">Grupo 2.1</option>
                            <option value="">Grupo 2.2</option>
                        </optgroup>
                        <option value="1">Opção 1</option>
                        <option value="2">Opção 2</option>
                        <option value="3">Opção 3</option>
                    </select>
                </p>
                <p>
                    Date: <input type="date" name="date" id="date">
                </p>
                <p>
                    Time: <input type="time" name="time" id="time">
                </p>
                <p>
                    DateTime: <input type="datetime" name="datetime" id="datetime">
                </p>
                <p>
                    <button type="submit">
                        Validar
                    </button>
                </p>
            </fieldset>

        </form>
    </main>
    <script></script>
</body>

</html>