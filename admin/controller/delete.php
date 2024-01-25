<?php

$table = route(2);
$column = route(3);
$id = route(4);


$query = $db->delete($table)
    ->where($column, $id)
    ->done();

header('Location:' . $_SERVER['HTTP_REFERER']);
exit;
