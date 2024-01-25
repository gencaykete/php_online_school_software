<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  $add = $db->update('lessons')
            ->where('lesson_id',route(2))
            ->set($data);
  if ($add) {
    $success = 'Ders başarıyla güncellendi.';
    admin_go('lessons',1);
  }else {
    $error = 'Ders güncellenirken bir hata oluştu.';
  }
}
$query = $db->from('lessons')->where('lesson_id',route(2))->first();
$teacher = $db->from('users')
              ->where('user_school',session('user_id'))
              ->where('user_rank',3)
              ->orderby('user_id','DESC')
              ->all();

require admin_view('edit-lesson');

?>
