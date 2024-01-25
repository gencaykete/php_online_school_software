<?php
teacher_page();
$id = route(2);

$query = $db->from('questions')->where('question_id',$id)->first();

if (post('submit')) {
  unset($_POST['submit']);

  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }

  $add = $db->update('questions')
            ->where('question_id',$id)
            ->set($data);
  if ($add) {
    $success = 'Soru başarıyla kaydedildi.';
    admin_go('questions/'.$query['question_exam'],1.5);
  }else {
    $error = 'Soru kaydedilirken bir hata oluştu.';
  }
}

$query = $db->from('questions')->where('question_id',$id)->first();

require admin_view('edit-question');

?>
