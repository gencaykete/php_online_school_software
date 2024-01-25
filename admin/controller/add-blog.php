<?php
admin_page();
$id = route(2);

if (post('submit')) {

  $post_title = post('post_title');
  $post_seo = permalink($post_title);
  $post_desc = post('post_desc');
  $post_description = post('post_description');
  $post_keywords = post('post_keywords');
  $post_users = session('user_username');
  $post_date = date('d.m.Y');
  $post_img = upload('post_img');


  $add = $db->insert('posts')
            ->set([
              "post_title" => $post_title,
              "post_desc" => $post_desc,
              "post_seo" => $post_seo,
              "post_date" => $post_date,
              "post_user" => $post_users,
              "post_img" => $post_img,
              "post_description" => $post_description,
              "post_keywords" => $post_keywords
            ]);
  if ($add) {
    $success = 'Blog başarıyla eklendi.';
    admin_go('blog',2);
  }else {
    $error = 'Blog eklenirken bir hata oluştu.';
  }
}

require admin_view('add-blog');

?>
