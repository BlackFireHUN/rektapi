<?php
    $kepmappa = './anal/';
    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $kepek = glob($kepmappa . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $veletlenkep = basename($kepek[array_rand($kepek)]);
    $kimenet['url'] = $url .'img/'. $veletlenkep;
    header('Content-Type: application/json');
    echo json_encode($kimenet, JSON_UNESCAPED_UNICODE);
?>