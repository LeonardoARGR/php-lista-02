<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 4</title>
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
        <h1>Triângulo</h1>
        <hr>
        <div class="form">
            <form action="triangulo.php" method="post">
                Insira o valor A: <input type=number name=numA><br/>
                Insira o valor B: <input type=number name=numB><br/>
                Insira o valor C: <input type=number name=numC><br/>
                <input type=submit value="Enviar">
            </form>
        </div>
    </body>
</html>
