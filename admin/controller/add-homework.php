<?php
teacher_page();
if (post('submit')) {
  unset($_POST['submit']);
  $data=[];
  foreach ($_POST as $key => $value) {
    $data[$key]=post($key);
  }
  $data['homework_school']=$user['user_school'];
  $data['homework_teacher']=$user['user_id'];
  $data['homework_lesson']=route(2);
  $day=$data['homework_1']*$data['homework_2'];
  unset($data['homework_1']);
  unset($data['homework_2']);
  $data['homework_date']=date('Y-m-d H:i',strtotime('+'.$day.'day'));

  $add = $db->insert('homeworks')->set($data);
  if ($add) {
    $success = "Ödev Başarıyla Eklendi";
    admin_go('homeworks/'.route(2),1.5);
  }else {
    $error = "Bir Hata Oluştu";
  }
}
$query = $db->from('lessons')->where('lesson_id',route(2))->first();

require admin_view('add-homework');

?>
