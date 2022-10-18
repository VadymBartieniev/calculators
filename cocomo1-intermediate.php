<html>

<?php
$valuesByLevel = array(
    "Необхідна надійність програмного забезпечення" => array("very low" => 0.75, "low" => 0.88, "average" => 1, "high" => 1.15, "very high" => 1.4, "critical" => null),
    "Розмір БД" => array("very low" => null, "low" => 0.94, "average" => 1, "high" => 1.08, "very high" => 1.16, "critical" => null),
    "Складність продукту" => array("very low" => 0.7, "low" => 0.85, "average" => 1, "high" => 1.15, "very high" => 1.3, "critical" => 1.65),
    "Обмеження швидкості" => array("very low" => null, "low" => null, "average" => 1, "high" => 1.11, "very high" => 1.3, "critical" => 1.66),
    "Обмеження даних" => array("very low" => null, "low" => null, "average" => 1, "high" => 1.06, "very high" => 1.21, "critical" => 1.56),
    "Нестабільність середовища віртуальної машини" => array("very low" => null, "low" => 0.87, "average" => 1, "high" => 1.15, "very high" => 1.3, "critical" => null),
    "Потрібен час на відновлення" => array("very low" => null, "low" => 0.87, "average" => 1, "high" => 1.07, "very high" => 1.15, "critical" => null),
    "Аналітичні здібності" => array("very low" => 1.46, "low" => 1.19, "average" => 1, "high" => 0.86, "very high" => 0.71, "critical" => null),
    "Досвід розробки" => array("very low" => 1.29, "low" => 1.13, "average" => 1, "high" => 0.91, "very high" => 0.82, "critical" => null),
    "Здатність до розвитку" => array("very low" => 1.42, "low" => 1.17, "average" => 1, "high" => 0.86, "very high" => 0.7, "critical" => null),
    "Досвід використання віртуальних машин" => array("very low" => 1.21, "low" => 1.1, "average" => 1, "high" => 0.9, "very high" => null, "critical" => null),
    "Досвід розробки мов програмування" => array("very low" => 1.14, "low" => 1.07, "average" => 1, "high" => 0.95, "very high" => null, "critical" => null),
    "Застосування методів розробки програмного забезпечення" => array("very low" => 1.24, "low" => 1.1, "average" => 1, "high" => 0.91, "very high" => 0.82, "critical" => null),
    "Використання засобів розробки" => array("very low" => 1.24, "low" => 1.1, "average" => 1, "high" => 0.91, "very high" => 0.83, "critical" => null),
    "Вимоги до виконання графіка розробки" => array("very low" => 1.23, "low" => 1.08, "average" => 1, "high" => 1.04, "very high" => 1.1, "critical" => null)
);
?>

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
                    <a class="nav-link" href="cocomo1-basic.php">COCOMO I базовий</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cocomo1-intermediate.php"><span class="sr-only">COCOMO I проміжний</span></a>
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
            <h1>Cocomo I проміжний рівень</h1>
            <div class="container w-75 bg-white shadow-lg p-3">
                <form method="post" action="cocomo1-intermediate.php">
                    <div class="form-group">
                        <label for="type-of-project">Тип проекту</label>
                        <select class="form-control" name="type-of-project" id="type-of-project">
                            <option>Органічний</option>
                            <option>Напівнезалежний</option>
                            <option>Вбудований</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lines-of-code">Кількість рядків коду:</label>
                        <input type="number" class="form-control" name="lines-of-code" id="lines-of-code" aria-describedby="lines-of-code-help" placeholder="Введіть кількість" required>
                        <small id="lines-of-code-help" class="form-text text-muted">*Позначається в тисячах*</small>
                    </div>

                    <div class="form-group">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Атрибут</th>
                                    <th scope="col">Значення</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($valuesByLevel as $attribute => $numbers) {
                                    $attr = str_replace(" ", "_", $attribute);

                                    echo "<tr>";
                                    echo "<th scope=\"row\">$i</th>";

                                    echo "<td>";
                                    echo "	<label for=\"$attr\">$attribute</label>";
                                    echo "</td>";

                                    echo "<td>";
                                    echo "	<select class=\"form-control\" name=\"$attr\" id=\"$attr\">";

                                    foreach ($numbers as $key => $value) {
                                        if ($value == 1) {
                                            echo "		<option value=\"$value\" selected=\"selected\">$key ($value)</option>";
                                        }
                                        elseif ($value != null) {
                                            echo "		<option value=\"$value\">$key ($value)</option>";
                                        }
                                    }
                                    echo "	</select>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" name="submit" class="btn btn-secondary">Розрахувати</button>
                </form>
                <?php
                $values = array(
                    "Органічний" => array("a" => 3.2, "b" => 1.05),
                    "Напівнезалежний" => array("a" => 3, "b" => 1.12),
                    "Вбудований" => array("a" => 2.8, "b" => 1.2)
                );
                if (isset($_POST['submit'])) {
                    $type = $_POST['type-of-project'];
                    $loc = $_POST['lines-of-code'];

                    $values = $values[$type];

                    $EAF = 1;
                    foreach ($valuesByLevel as $key => $value) {
                        $attr = str_replace(" ", "_", $key);
                        $EAF *= $_POST[$attr];
                    }

                    $PM = $EAF * $values['a'] * pow($loc, $values['b']);

                    echo "<p>EAF = $EAF</p>";
                    echo "<p>PM (People × Month): $PM</p>";
                }
                ?>
            </div>
        </div>

    </main>
</body>

</html>
