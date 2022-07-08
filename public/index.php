<?php
session_start([
    'cookie_lifetime' => 86400,
]);
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../helpers/helpers.php';
require_once __DIR__ . '/../helpers/RequestHelper.php';
use App\Services\IteratotsLessons4\TestModel;
use App\Services\IteratotsLessons4\Collection;
//$router = new Router();
//$router->run();

$db = \App\Services\DB\DataBase::connect();
try {
    $arrays = new \App\Services\IteratotsLessons4\ArrayAccess();
    $statement = $db->query('SELECT * FROM users');
    $i = 0;
    while ($row = $statement->fetch())
    {
        $obj[$i] = new TestModel($row['username'], $row['email'], $row['id']);
        $arrays[$i] = $row;
        $i++;
    }
} catch (\Exception $exception)
{
    echo $exception->getMessage();
}

$collections = new Collection($arrays->stack);
$collections_ob = new Collection($obj);



foreach ($collections->getIterator() as $item) {
    var_dump($item['username']);
}

foreach ($collections_ob->getIterator() as $item) {
    var_dump($item->name);
}

echo sizeofvar($collections) . PHP_EOL;
echo sizeofvar($collections_ob) . PHP_EOL;