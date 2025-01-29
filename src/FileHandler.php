<?php

// Restricciones y Reglas
$uploadDir = "files/"; // 
$allowedFileType = "text/plain"; // solo txt
$maxFileSize = 2 * 1024 * 1024; // 2 MB


if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK && $_POST["name"]){
        $fileTmpPath = $_FILES["file"]["tmp_name"];
        $fileName = $_POST["name"] . ".txt";
        $fileSize = $_FILES["file"]["size"];
        $fileType = mime_content_type($fileTmpPath);

        // Validación del tipo de archivo
        if ($fileType !== $allowedFileType) {
            die("Error: Solo se permiten archivos .txt.");
        }

        // Validación del tamaño del archivo
        if ($fileSize > $maxFileSize) {
            die("Error: El archivo excede el tamaño máximo permitido de 2 MB.");
        }

        // Genera un nombre único para el archivo para evitar colisiones
        $uniqueFileName = uniqid() . "_" . $fileName;
        $destPath = $uploadDir . $uniqueFileName;

        // Crea el directorio si no existe
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Mueve el archivo al directorio de destino
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            echo "El archivo se ha subido correctamente a: " . htmlspecialchars($destPath);
        } else {
            die("Error: No se pudo mover el archivo al directorio de destino.");
        }
    }else {
        die("Error: No se recibió ningún archivo o hubo un error en la subida.");
    }
} else {
    die("Error: Solicitud inválida.");
}