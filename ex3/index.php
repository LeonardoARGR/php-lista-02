<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 3</title>
        <style>
            h1{
                text-align: center;
            }
            .form{
                display: flex;
                justify-content: center;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Maior ou Menor</h1>
        <hr>
        <div class="form">
            <form action="maior_menor.php" method="post">
                Insira o valor A: <input type=number name=numA><br/>
                Insira o valor B: <input type=number name=numB><br/>
                <input type=submit value="Enviar">
            </form>
        </div>
    </body>
</html>
