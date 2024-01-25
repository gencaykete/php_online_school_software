<?php
school_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }

  $add = $db->update('kasa')
            ->where('kasa_id',$id)
            ->set($data);
  if ($add) {
    $success = 'Veri başarıyla kaydedildi.';
    admin_go('case',1);
  }else {
    $error = 'Veri kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('kasa')->where('kasa_id',$id)->first();

require admin_view('edit-case');

?>
