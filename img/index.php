<?php
    $imgdir = './anal/';
    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $imgs = glob($imgdir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $veletlenkep = basename($imgs[array_rand($imgs)]);
    $output['url'] = $url .'img/'. $randomimg;
    header('Content-Type: application/json');
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>
