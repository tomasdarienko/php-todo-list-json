
<?php

$todo = file_get_contents("todo.json");

header('content-type: application/json');
echo $todo;
?>