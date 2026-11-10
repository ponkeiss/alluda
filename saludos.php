<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluditos</title>
</head>
<body>
    <h1>Saludos</h1>
    <form method="POST" action="">
        <label>Elige un idioma bro:</label>
            <br><br>
            <select name="idioma" required>
                <option value="select">seleccionar</option>
                <option value="espa">Español</option>
                <option value="ing">Ingles</option>
                <option value="uwu">Japones</option>
                <option value="ita">Italiano</option>
                <option value="fran">Frances</option>
            </select>
            <br><br>
            <button type="submit">picale aqui porfi</button>
            <br><br>
            <img src="https://thumbs.dreamstime.com/b/el-agitar-rojo-y-blanco-lindo-del-gato-18992471.jpg" alt="Saludito" width="300">
    </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                $i = strval($_POST['idioma']);
                if ( $i === "espa" ){
                    echo "<h2>¡Hola bro!</h2>";
                } elseif ( $i === "ing" ){
                    echo "<h2>Hello bro!</h2>";
                } elseif ( $i === "uwu" ){
                    echo "<h2>Konnichiwa bro! (こんにちは)</h2>";
                } elseif ( $i === "ita" ){
                    echo "<h2>¡Ciao bro!</h2>";
                } elseif ( $i === "fran" ){
                    echo "<h2>¡Salut bro!</h2>";
                } else {
                    echo "no";
                }
            }
        ?>
</body>
</html>