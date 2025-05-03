<?php

require_once '../../src/response.php';

header("Content-Type: application/json");
//checa se o método http é get
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $response = new Response;
    $response->status();

} else {

    echo json_encode(["error" => "Erro metodo de request invalido"]);

}