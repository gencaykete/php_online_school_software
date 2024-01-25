<?php
admin_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }

  $add = $db->update('packets')
            ->where('packet_id',$id)
            ->set($data);
  if ($add) {
    $success = 'Paket başarıyla kaydedildi.';
    admin_go('packets',1);
  }else {
    $error = 'Paket kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('packets')->where('packet_id',$id)->first();

require admin_view('edit-packet');

?>
