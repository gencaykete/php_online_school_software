<?php

$query = $db->from('posts')
          ->orderby('post_id','DESC')
          ->all();

$meta = [
  'title' => 'Blog'
];

require view('blogs');

?>
