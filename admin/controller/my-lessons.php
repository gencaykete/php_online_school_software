<?php

if (session('user_rank')==4) {
  $query = $db->from('lessons')
              ->where('lesson_school',$user['user_school'])
              ->where('lesson_class',$user['user_class'])
              ->all();
  require admin_view('my-lessons-student');
}else {
  $query = $db->from('lessons')
              ->where('lesson_school',$user['user_school'])
              ->where('lesson_teacher',$user['user_id'])
              ->orderby('lesson_name','DESC')
              ->all();
  require admin_view('my-lessons');
}



?>
