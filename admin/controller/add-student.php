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
  $data['user_rank'] = 4;
  $data['user_finish'] = $user['user_finish'];
  $data['user_school'] = session('user_school');

  $add = $db->insert('users')
            ->set($data);

  if ($add) {
    $success = 'Öğrenci başarıyla eklendi.';
    admin_go('students',1.5);
  }else {
    $error = 'Öğrenci eklendi bir hata oluştu.';
  }
}
$query = $db->from('users')->where('user_school',session('user_id'))->where('user_rank',5)->all();
require admin_view('add-student');

?>
