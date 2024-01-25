<?php

$seo = route(1);

$query = $db->from('posts')
            ->where('post_seo',$seo)
            ->first();

$views = $query['post_view']+1;

$up = $db->update('posts')
         ->where('post_seo',$seo)
         ->set([
           'post_view' => $views
         ]);

$meta = [
  'title' => $query['post_title'],
  'description' => $query['post_description'],
  'keywords' => $query['post_keywords']
];

require view('blog');

?>
