<?php

require_once 'vendor/autoload.php';

$img_path = 'image.jpg';
$save_path = 'mod-image.jpg';

$thumb =  new PHPThumb\GD($img_path);
$thumb->resize(50, 50);

$thumb->show();
$thumb->save($save_path);