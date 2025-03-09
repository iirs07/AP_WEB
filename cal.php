<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        input[type="number"],
        select,
        input[type="submit"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora en PHP</h1>

        <form method="post">
            <input type="number" name="num1" placeholder="Número 1" required>
            <input type="number" name="num2" placeholder="Número 2" required><br>

            <select name="operacion" required>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select><br>

            <input type="submit" value="Calcular">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operacion = $_POST["operacion"];
                
                $resultado = '';
                switch ($operacion) {
                    case "suma":
                        $resultado = $num1 + $num2;
                        break;
                    case "resta":
                        $resultado = $num1 - $num2;
                        break;
                    case "multiplicacion":
                        $resultado = $num1 * $num2;
                        break;
                    case "division":
                        if ($num2 == 0) {
                            $resultado = 'No se puede dividir por cero.';
                        } else {
                            $resultado = $num1 / $num2;
                        }
                        break;
                }
                echo "<input type='text' value='Resultado: $resultado' readonly>";
            }
        ?>
    </div>
</body>
</html>
