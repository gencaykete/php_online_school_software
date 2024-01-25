<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  if ($data['user_pass'] == '') {
    unset($data['user_pass']);
  }else {
    $data['user_pass'] = md5($data['user_pass']);
  }
  if ($_FILES['user_profile']['size'] > 0) {
    $data['user_profile'] = upload('user_profile');
  }
  $data['user_username'] = $data['user_phone'];
  $add = $db->update('users')
            ->where('user_id',$id)
            ->set($data);
  if ($add) {
    $success = 'Veli başarıyla kaydedildi.';
    admin_go('veliler',1);
  }else {
    $error = 'Veli kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('users')->where('user_id',$id)->where('user_school',session('user_id'))->first();

require admin_view('edit-veli');

?>
