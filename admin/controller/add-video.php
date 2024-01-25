<?php
teacher_page();
$query = $db->from('lessons')->where('lesson_id',route(2))->first();
if (post('submit')) {
  unset($_POST['submit']);
  $data=[];
  foreach ($_POST as $key => $value) {
    $data[$key]=post($key);
  }
  $data['video_school']=$user['user_school'];
  $data['video_teacher']=session('user_id');
  $data['video_lesson']=route(2);
  $data['video_class']=$query['lesson_class'];
  $data['video_code']=md5(random_string(11));

  $add = $db->insert('lesson_video')->set($data);
  if ($add) {
    $succes = "Video Başarıyla Yüklendi";
    admin_go('lesson-videos/'.route(2),1.5);
  }else {
    $error = "Bir Hata Oluştu";
  }
}

require admin_view('add-video');

?>
