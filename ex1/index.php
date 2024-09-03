<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 1</title>
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
        <h1>Positivo ou Negativo</h1>
        <hr>
        <div class="form">
            <form action="pos_neg.php" method="post">
                Insira um número: <input type=number name=num><br/>
                <input type=submit value="Enviar">
            </form>
        </div>
    </body>
</html>
