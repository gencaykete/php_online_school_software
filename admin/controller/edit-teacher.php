<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  if ($_FILES['user_profile']['size'] > 0) {
    $data['user_profile'] = upload('user_profile');
  }
  if (!empty($data['user_pass'])) {
    $data['user_pass'] = md5($data['user_pass']);
  }else {
    unset($data['user_pass']);
  }
  $data['user_username'] = $data['user_tc'];
  $add = $db->update('users')
            ->where('user_id',$id)
            ->set($data);

  if ($add) {
    $success = 'Öğretmen başarıyla kaydedildi.';
    admin_go('teachers',1.5);
  }else {
    $error = 'Öğretmen kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('users')
            ->where('user_id',$id)
            ->first();

require admin_view('edit-teacher');

?>
