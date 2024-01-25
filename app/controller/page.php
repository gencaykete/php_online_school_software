<?php

$query = $db->from('pages')->where('page_seo',route(1))->first();

$meta = [
  'title' => $query['page_title'],
  'description' => $query['page_description'],
  'keywords' => $query['page_keywords']
];

require view('page');

?>
