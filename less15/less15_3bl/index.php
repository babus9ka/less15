<?php
require_once 'Worker.php';

$worker = new Worker();

$worker->create("Ivan Ivanov", "ivan@localhost", 27, "SEO");
$worker->create("Roman Romanov", "roman@localhost", 32, "Web-developer");
$worker->create("Max", "max@localhost", 67, "SEO");
$worker->create("Ivan Ivanov", "google@gmail", 27, "PHP-developer");
$worker->create("Pavel Licov", "pavel@localhost", 31, "React developer");

echo "<pre>";
print_r($worker->all());
echo "</pre>";
$worker->save();



