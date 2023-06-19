<?php

header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

function sendRequest($method, $element, $data = []) {

    if($element == "sous-categorie") $element = "sous_categorie";
    
    $response = file_get_contents (
        'http://localhost/TP_XML/api/'.$element, 
        false, 
        stream_context_create(array (
            'http' => array(
                'method' => $method,
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => http_build_query($data),
            ),
        ))
    );

    return $response;

}

// Récupérer toutes les catégories
function all($element) {
    $response = sendRequest('GET', $element);
    $categories = json_decode($response, true);
    return $categories;
}

// Récupérer une catégorie par ID
function get($element, $data) {
    // $data = http_build_query([
    //     'id' => 1,
    // ]);
    $data = http_build_query($data);
    $response = sendRequest('GET', $element, $data);
    $category = json_decode($response, true);
    return $category;
}

// Ajouter une catégorie
function save($element, $data) {
    // $data = http_build_query([
    //     'code' => 'NEW',
    //     'description' => 'Nouvelle catégorie'
    // ]);
    $data = http_build_query($data);
    $response = sendRequest('POST', $element, $data);
    $result = json_decode($response, true);
    return $result;
}

// Modifier une catégorie par ID
function edit($element, $data) {
    // $data = http_build_query([
    //     'id' => 1,
    //     'code' => 'NEW_CODE',
    //     'description' => 'Nouvelle description'
    // ]);
    $data = http_build_query($data);
    $response = sendRequest('PUT', $element, $data);
    $result = json_decode($response, true);
    return $result;
}

// Supprimer une catégorie par ID
function delete($element, $data) {
    // $data = http_build_query([
    //     'id' => 1,
    // ]);
    $data = http_build_query($data);
    $response = sendRequest('DELETE', $element, $data);
    $result = json_decode($response, true);
    return $result;
}