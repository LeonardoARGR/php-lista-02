<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 5</title>
        <style>
            h1{
                text-align: center;
            }
            .form{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Pedra, Papel ou Tesoura!</h1>
        <hr>
        <div class="form">
            <center>
                <form method="post" action="resultado.php">
                    Informe seu nome: <input type=text name="nome"><br/>
                    <select name="escolha">
                        <option value=0>Pedra</option>
                        <option value=1>Papel</option>
                        <option value=2>Tesoura</option>
                    </select>
                    <input type=submit value="Enviar">
                </form>
            </center>
        </div>
    </body>
</html>
