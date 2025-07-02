<?php

/**
 * Leggo tutti i file dalla directory corrente
 */
$files = scandir(__DIR__);

echo '<h1>Elenco dei file di demo</h1>';
echo '<ul>';

foreach ($files as $file) {
    if (($file !== '.') &&
        ($file !== '..') &&
        ($file !== 'index.php') &&
        (mb_substr($file, -4) === '.php')
    ) {
        $nome = basename($file, '.php');

        echo "<li><a href='./{$file}'>{$nome}</a></li>";
    }
}

echo '</ul>';
