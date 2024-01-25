<?php
if (session('user_rank')==3) {
  teacher_page();
  if (route(2)=='view-notes') {
    $db->update('exams')->where('exam_code',route(3))->set(['exam_view'=>'[YES]']);
    $e_u = $db->from('exam_notes')->where('note_exam',route(3))->all();
    $cek = $db->from('exams')->where('exam_code',route(3))->join('lessons','%s.lesson_id=%s.exam_lesson')->first();
    foreach ($e_u as $row) {
      notify($row['note_user'],$cek['lesson_name'].' Dersi Sınav Notunuz: '.$row['note_point'],'my-notes');
    }
    admin_go('exams');
  }elseif (route(2)=='hide-notes') {
    $db->update('exams')->where('exam_code',route(3))->set(['exam_view'=>'[NO]']);
    admin_go('exams');
  }
  $query = $db->from('exams')
              ->where('exam_teacher',session('user_id'))
              ->where('exam_school',$user['user_school'])
              ->orderby('exam_class','asc')
              ->join('lessons','%s.lesson_id=%s.exam_lesson','left')
              ->all();
  require admin_view('exams');
}elseif (session('user_rank')==4) {
  student_page();

  $query = $db->from('exams')
              ->where('exam_class',$user['user_class'])
              ->where('exam_school',$user['user_school'])
              ->join('lessons','%s.lesson_id=%s.exam_lesson','left')
              ->all();
  require admin_view('student-exams');
}



?>
