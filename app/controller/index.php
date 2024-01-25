<?php

$meta = [
    'title' => setting('title'),
    'description' => setting('description'),
    'keywords' => setting('keywords')
];

$slider = $db->from('sliders')->orderby('slider_id','DESC')->all();

go('admin');
exit();
require view('index');

?>
