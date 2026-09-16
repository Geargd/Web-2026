<?php
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $image = base64_decode($data['image']);
    $fileName = basename($data['file_name']);

    file_put_contents('./static/' . $fileName, $image);

}