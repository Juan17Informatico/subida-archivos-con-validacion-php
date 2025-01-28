<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos de validaci&oacute;n</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <h1>Subida de archivos con validaci&oacute;n</h1>
        <form action="./src/FileHandler.php" method="post">
            <div>
                <label for="name">
                    Nombre del Archivo
                </label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <input type="file" name="file" id="file" accept="text/plain">
            </div>
            <button type="submit">Enviar Archivo</button>
        </form>
    </main>
</body>

</html>