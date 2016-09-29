<?php

$data = ['puppa', 'duppa', 'ryppka', 'pippka'];

header("Content-type: application/json");
echo json_encode($data);