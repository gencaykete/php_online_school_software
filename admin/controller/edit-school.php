<?php
admin_page();
$id = route(2);

if (post('user_name')) {
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

  $data['user_finish']=tarih($data['user_finish']);
  $cek = $db->from('users')->where('user_school',$id)->all();
  foreach ($cek as $r) {
    $add = $db->update('users')
              ->where('user_id',$r['user_id'])
              ->set([
                "user_finish" => $data['user_finish']
              ]);
  }
  $add = $db->update('users')
            ->where('user_id',$id)
            ->set($data);
  if ($add) {
    $success = 'Okul başarıyla kaydedildi.';
    admin_go('schools',2);
  }else {
    $error = 'Okul kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('users')->where('user_id',$id)->first();

require admin_view('edit-school');

?>
