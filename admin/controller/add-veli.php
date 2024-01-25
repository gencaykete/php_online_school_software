<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  $data['user_school'] = session('user_id');
  $data['user_profile'] = upload('user_profile');
  $data['user_pass'] = md5($data['user_pass']);
  $data['user_username'] = $data['user_phone'];
  $add = $db->insert('users')
            ->set($data);
  if ($add) {
    $success = 'Veli başarıyla eklendi.';
    admin_go('veliler',1);
  }else {
    $error = 'Veli eklenirken bir hata oluştu.';
  }
}

require admin_view('add-veli');

?>
