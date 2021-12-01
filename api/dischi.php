<?php
require_once __DIR__ . "/../data/dischi_arr.php";

header("Content-Type: application/json");
echo json_encode([
    "listaDischi" => $dischi
]);
