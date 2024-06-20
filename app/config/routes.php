<?php

use ScadaUnity\Http\Router;

/**
 * Define os arquivos que contem as rotas
 * @var array
 */
Router::setMap([
    'web'       => ROOT.'/app/routes/web.php',
    'auth'      => ROOT.'/app/routes/auth.php',
]);
