<?php
require_once 'Worker.php';

$worker = new Worker();

$worker->create("Ivan Ivanov", "ivan@localhost", 27, "SEO");
$worker->create("Roman Romanov", "roman@localhost", 32, "Web-developer");


echo "<pre>";
print_r ($worker->find("ivan@localhost"));
echo "</pre>";





