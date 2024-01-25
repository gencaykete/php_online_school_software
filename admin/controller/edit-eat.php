<?php
teacher_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }

  $add = $db->update('eats')
            ->where('eat_id',$id)
            ->set($data);
  if ($add) {
    $success = 'Yemek Bilgisi başarıyla kaydedildi.';
    admin_go('eats',1);
  }else {
    $error = 'Yemek Bilgisi kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('eats')->where('eat_id',$id)->first();
$students = $db->from('ogrenciler')
               ->where('ogrenci_okul',$user['user_school'])
               ->where('ogrenci_durum','Kesin Kayıt')
               ->join('class','class.class_id = ogrenciler.ogrenci_sinif','left')
               ->all();
require admin_view('edit-eat');

?>
