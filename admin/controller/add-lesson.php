<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  foreach ($_POST['lesson_class'] as $value) {
    $add = $db->insert('lessons')
              ->set([
                'lesson_school' => session('user_id'),
                'lesson_class' => $value,
                'lesson_name' => post('lesson_name'),
                'lesson_teacher' => post('lesson_teacher')
              ]);
  }
  if ($add) {
    $success = 'Ders başarıyla eklendi.';
    admin_go('lessons',1);
  }else {
    $error = 'Ders eklenirken bir hata oluştu.';
  }
}
$teacher = $db->from('users')
              ->where('user_school',session('user_id'))
              ->where('user_rank',3)
              ->orderby('user_id','DESC')
              ->all();

require admin_view('add-lesson');

?>
