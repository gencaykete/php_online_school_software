<?php
admin_page();
$id = route(2);

if (post('submit')) {
  $query = $db->from('sliders')->where('slider_id',$id)->first();
  if ($_FILES['slider_img']['size'] == 0) {
    $img = $query['slider_img'];
  }else {
    unlink(PATH.'/'.$query['slider_img']);
    $img = upload('slider_img');
  }

  if ($_FILES['slider_png']['size'] == 0) {
    $png = $query['slider_png'];
  }else {
    unlink(PATH.'/'.$query['slider_png']);
    $png = upload('slider_png');
  }

  $title = post('slider_title');
  $desc = post('slider_desc');
  $button = post('slider_button');

  $add = $db->update('sliders')
            ->where('slider_id',$id)
            ->set([
              "slider_img" => $img,
              "slider_title" => $title,
              "slider_detail" => $desc,
              "slider_button" => $button,
              "slider_png" => $png
            ]);
  if ($add) {
    $success = 'Slider başarıyla kaydedildi.';
    admin_go('sliders',1);
  }else {
    $error = 'Slider kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('sliders')->where('slider_id',$id)->first();

require admin_view('edit-slider');

?>
