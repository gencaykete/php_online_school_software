<?php
admin_page();
$id = route(2);

if (post('submit')) {

  $post_title = post('post_title');
  $post_seo = permalink($post_title);
  $post_desc = post('post_desc');
  $post_description = post('post_description');
  $post_keywords = post('post_keywords');
  $post_category = post('post_category');

  $query = $db->from('posts')->where('post_id',$id)->first();
  if ($_FILES['post_img']['size'] == 0) {
    $post_img = $query['post_img'];
  }else {
    unlink(PATH.'/'.$query['post_img']);
    $post_img = upload('post_img');
  }

  $add = $db->update('posts')
            ->where('post_id',$id)
            ->set([
              "post_title" => $post_title,
              "post_desc" => $post_desc,
              "post_seo" => $post_seo,
              "post_img" => $post_img,
              "post_description" => $post_description,
              "post_keywords" => $post_keywords
            ]);
  if ($add) {
    $success = 'Blog başarıyla kaydedildi.';
    admin_go('blog',1);
  }else {
    $error = 'Blog kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('posts')->where('post_id',$id)->first();

require admin_view('edit-blog');

?>
