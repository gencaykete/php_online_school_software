<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  $add = $db->update('ills')
            ->where('ill_id',route(2))
            ->set($data);
  if ($add) {
    $success = 'Sağlık Bilgisi başarıyla güncellendi.';
    admin_go('ills',1);
  }else {
    $error = 'Sağlık Bilgisi güncellenirken bir hata oluştu.';
  }
}
$student = $db->from('users')
              ->where('user_school',session('user_id'))
              ->where('user_rank',4)
              ->orderby('user_id','DESC')
              ->all();
$query = $db->from('ills')->where('ill_id',route(2))->where('ill_school',session('user_id'))->first();

require admin_view('edit-ill');

?>
