<?php

require __DIR__ . '/vendor/autoload.php';

use Clue\React\SQLite\Factory;
use React\Http\Message\Response;
use function React\Async\await;

$factory = new Factory();
$db = $factory->openLazy(':memory:');

$app = new FrameworkX\App();

$app->get('/', fn () => Response::plaintext("Hello world!\n"));

$app->get('/db', function () use ($db) {
    $resultado = await($db->query('SELECT random() as numero;'));

    return Response::plaintext("{$resultado->rows[0]['numero']}");
});

$app->run();

