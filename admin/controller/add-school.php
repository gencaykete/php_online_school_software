<?php
admin_page();
$id = route(2);

if (post('user_name')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  $data['user_rank']=2;
  $data['user_profile'] = upload('user_profile');
  $data['user_pass'] = md5($data['user_pass']);
  $data['user_finish']=tarih($data['user_finish']);

  $add = $db->insert('users')
            ->set($data);
  if ($add) {
    $success = 'Okul başarıyla eklendi.';
    admin_go('schools',2);
  }else {
    $error = 'Okul eklenirken bir hata oluştu.';
  }
}

require admin_view('add-school');

?>
