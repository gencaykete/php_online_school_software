<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  $data['user_profile'] = upload('user_profile');
  $data['user_pass'] = md5($data['user_pass']);
  $data['user_school'] = session('user_id');
  $data['user_rank'] = 3;
  $data['user_finish'] = $user['user_finish'];
  $data['user_username'] = $data['user_tc'];


  $add = $db->insert('users')
            ->set($data);

  if ($add) {
    $success = 'Öğretmen başarıyla eklendi.';
    admin_go('teachers',1.5);
  }else {
    $error = 'Öğretmen eklenirken bir hata oluştu.';
  }
}

require admin_view('add-teacher');

?>
