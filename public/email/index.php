<?php

require_once '../../src/request.php';
//checa se o método http é post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $request = new Request;
    $request->sanitizador();
    $request->enviarEmail($_POST['formNome'], 
    $_POST['formAssunto'], 
    $_POST['formMensagem'], 
    $_POST['formEmail']);
    //echo json_encode($request->json());

} else {

    echo json_encode(["error" => "Erro metodo de request invalido"]);

}