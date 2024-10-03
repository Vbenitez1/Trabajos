<?php
require 'vendor/autoload.php'; // Asegúrate de tener el autoload de DOMPDF

use Dompdf\Dompdf;

// Crear una nueva instancia de DOMPDF
$dompdf = new Dompdf();

// HTML para el PDF
$html = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SNPP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Lista de Precios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Productos</th>
            <th>Precios</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Notebook Acer</td>
            <td>3.500.000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Mouse Mat</td>
            <td>250.000</td>
        </tr>
    </table>
</body>
</html>
';

// Cargar el HTML en DOMPDF
$dompdf->loadHtml($html);

// (Opcional) Configurar el tamaño y la orientación del papel
$dompdf->setPaper('A4', 'portrait');

// Renderizar el HTML como PDF
$dompdf->render();

// Enviar el PDF al navegador
$dompdf->stream("lista_precios.pdf", ["Attachment" => false]);
