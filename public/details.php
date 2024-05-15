<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/twig.php';

echo $twig->display('details.html.twig');