<?php

require __DIR__ . '/vendor/autoload.php';

use React\Http\Message\Response;

$app = new FrameworkX\App();

$app->get('/', fn () => Response::plaintext("Hello world!\n"));

$app->run();

