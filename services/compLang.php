<?php

// $data = ['puppa', 'duppa', 'ryppka', 'pippka'];

$data = file("data.txt", FILE_IGNORE_NEW_LINES);

header("Content-type: application/json");
echo json_encode($data);