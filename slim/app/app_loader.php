<?php
$base = __DIR__ . '/';

$folders = [
    'lib',
    'model',
    'route'
];

//glob — Buscar coincidencias de nombres de ruta con un patrón
foreach($folders as $f)
{
    foreach (glob($base . "$f/*.php") as $filename)
    {
        require $filename;
    }
}
