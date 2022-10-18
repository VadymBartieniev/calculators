<html>

<head>
    <?php
    require('config.php');
    ?>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-teal fixed-top">
        <a class="navbar-brand" href="index.php">Головна</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav nav-fill w-50">
                <li class="nav-item">
                    <a class="nav-link" href="cocomo1-basic.php">COCOMO I базовий</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cocomo1-intermediate.php">COCOMO I проміжний</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cocomo2.php">COCOMO II</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="functional-points.php">Функціональні точки</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Оберіть потрібну версію калькулятора</h1>
            <p class="lead">
                Виберіть потрібний калькулятор та насолоджуйтесь використанням!
            </p>
        </div>

    </main>
</body>

</html>
