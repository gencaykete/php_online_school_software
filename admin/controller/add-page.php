<?php
admin_page();
$id = route(2);

if (post('submit')) {

  $page_title = post('page_title');
  $page_seo = permalink($page_title);
  $page_description = post('page_description');
  $page_keywords = post('page_keywords');
  $page_detail = post('page_detail');
  $page_menu = post('page_menu');

  $add = $db->insert('pages')
            ->set([
              "page_title" => $page_title,
              "page_detail" => $page_detail,
              "page_seo" => $page_seo,
              "page_menu" => $page_menu,
              "page_description" => $page_description,
              "page_keywords" => $page_keywords
            ]);
  if ($add) {
    $success = 'Sayfa başarıyla eklendi.';
    admin_go('pages',1);
  }else {
    $error = 'Sayfa eklenirken bir hata oluştu.';
  }
}

require admin_view('add-page');

?>
