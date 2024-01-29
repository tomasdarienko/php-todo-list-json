<?php

     $todo = file_get_contents("todo.json");

     $list = json_decode($todo, true);

     if (isset($_POST['item'])) {

          $item = $_POST['item'];

          $todo = [
               "task" => $item,
          ];

          array_push($list, $todo);

          file_put_contents('todo.json', json_encode($list));
     }

     header('`Content-type: application/json');
     echo json_encode($list);
?>