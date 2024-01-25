<?php
school_page();
$id = route(2);
if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
  $add = $db->update('notices')
            ->where('notice_id',route(2))
            ->set($data);
  if ($add) {
    $success = 'Duyuru başarıyla güncellendi.';
    admin_go('notices',1);
  }else {
    $error = 'Duyuru güncellenirken bir hata oluştu.';
  }
}
$query = $db->from('notices')->where('notice_id',route(2))->first();
require admin_view('edit-notice');

?>
