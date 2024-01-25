<?php
school_page();
$id = route(2);
if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  $data['notice_school'] = session('user_id');
  $add = $db->insert('notices')
            ->set($data);
  if ($add) {
    $success = 'Duyuru başarıyla eklendi.';
    admin_go('notices',1);
  }else {
    $error = 'Duyuru eklenirken bir hata oluştu.';
  }
}

require admin_view('add-notice');

?>
