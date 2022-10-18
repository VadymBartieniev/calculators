<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-teal fixed-top">
        <a class="navbar-brand" href="index.php">Головна</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav nav-fill w-75">
                <li class="nav-item">
                    <a class="nav-link" href="cocomo1-basic.php"><span class="sr-only">COCOMO I базовий</span></a>
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
            <h1>Cocomo I базовий</h1>
            <div class="container w-50 bg-white shadow-lg p-3">
                <form method="post" action="cocomo1-basic.php">
                    <div class="form-group">
                        <label for="type-of-project">Тип проекту</label>
                        <select class="form-control" name="type-of-project" id="type-of-project">
                            <option>Органічний</option>
                            <option>Напівнезалежний</option>
                            <option>Вбудований</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lines-of-code">Кількість рядків коду: </label>
                        <input type="number" class="form-control" name="lines-of-code" id="lines-of-code" aria-describedby="lines-of-code-help" placeholder="Введіть кількість" required>
                        <small id="lines-of-code-help" class="form-text text-muted">*Позначається в тисячах*</small>
                    </div>
                    <button type="submit" name="submit" class="btn btn-secondary">Розрахувати</button>
                </form>
                <?php
                $values = array(
                    "Органічний" => array("a" => 2.4, "b" => 1.05, "c" => 2.5, "d" => 0.38),
                    "Напівнезалежний" => array("a" => 3, "b" => 1.12, "c" => 2.5, "d" => 0.35),
                    "Вбудований" => array("a" => 3.6, "b" => 1.2, "c" => 2.5, "d" => 0.32)
                );
                if (isset($_POST['submit'])) {
                    $type = $_POST['type-of-project'];
                    $loc = $_POST['lines-of-code'];

                    $values = $values[$type];

                    $PM = $values['a'] * pow($loc, $values['b']);
                    $TM = $values['c'] * pow($PM, $values['d']);
                    $SS = $PM / $TM;
                    $P = $loc / $PM;

                    echo "<p>PM = $PM</p>";
                    echo "<p>TM = $TM</p>";
                    echo "<p>SS = $SS</p>";
                    echo "<p> P = $P</p>";
                }
                ?>
            </div>
        </div>

    </main>
</body>

</html>
