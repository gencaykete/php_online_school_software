<?php
teacher_page();
$id = route(2);

if (post('submit')) {
  unset($_POST['submit']);
  $data = [];

  foreach ($_POST as $key => $value) {
    for ($i=0; $i < count($value); $i++) {
      $data[$i]['question_exam'] = $id;
      $data[$i][$key]=$value[$i];
    }
  }

  foreach ($data as $key => $value) {
    $add = $db->insert('questions')->set($value);
  }


  if ($add) {
    $success = 'Soru başarıyla eklendi.';
    admin_go('questions/'.$id,1.5);
  }else {
    $error = 'Soru eklenirken bir hata oluştu.';
  }
}

require admin_view('add-question');

?>
