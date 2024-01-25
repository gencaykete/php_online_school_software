<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }

  $add = $db->update('class')
            ->where('class_id',$id)
            ->set($data);
  if ($add) {
    $success = 'Sınıf başarıyla kaydedildi.';
    admin_go('class',1);
  }else {
    $error = 'Sınıf kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('class')->where('class_id',$id)->first();
$teacher = $db->from('users')
              ->where('user_school',session('user_id'))
              ->orderby('user_id','DESC')
              ->all();

require admin_view('edit-class');

?>
