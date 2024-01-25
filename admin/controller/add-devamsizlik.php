<?php
teacher_page();
if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }

  $add = $db->insert('devam')
            ->set($data);
  $devam_id = $db->lastId();
  $query = $db->from('ogrenciler')
              ->where('ogrenci_sinif',$data['devam_class'])
              ->all();

  foreach ($query as $row) {
    $adds = $db->insert('d_student')
               ->set([
                 'devam_id' => $devam_id,
                 'd_student' => $row['ogrenci_id'],
                 'd_type' => 1,
                 'd_school' => $user['user_school']
               ]);
  }

  if ($add) {
    $success = 'Devamsızlık Bilgisi başarıyla kaydedildi.';
    admin_go('devamsizlik',1);
  }else {
    $error = 'Devamsızlık Bilgisi kaydedilirken bir hata oluştu.';
  }
}

$students = $db->from('class')
               ->where('class_school',$user['user_school'])
               ->where('class_teacher',$user['user_id'])
               ->all();

require admin_view('add-devamsizlik');

?>
