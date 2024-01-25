<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  $data['ill_school'] = session('user_id');
  $data['ill_date'] = date('d.m.Y H:i');
  $add = $db->insert('ills')
            ->set($data);
  if ($add) {
    $success = 'Sağlık Bilgisi başarıyla eklendi.';
    admin_go('ills',1);
  }else {
    $error = 'Sağlık Bilgisi eklenirken bir hata oluştu.';
  }
}
$student = $db->from('users')
              ->where('user_school',session('user_id'))
              ->where('user_rank',4)
              ->orderby('user_id','DESC')
              ->all();

require admin_view('add-ill');

?>
