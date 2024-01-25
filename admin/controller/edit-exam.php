<?php

$id=route(2);
if (post('exam_date')) {
  $ex = explode('[EXP]',post('exam_lesson'));
  $data=[
    'exam_class'=>$ex[0],
    'exam_lesson'=>$ex[1],
    'exam_date' => post('exam_date'),
    'exam_teacher' => session('user_id'),
    'exam_school' => $user['user_school'],
    'exam_view' => post('exam_view')
  ];
  $add = $db->update('exams')->where('exam_code',$id)->set($data);
  if ($add) {
    $success="Sınav Başarıyla Güncellendi.";
    admin_go('exams');
  }else {
    $error="Bir Hata Oluştu !";
  }
}
$query = $db->from('lessons')
            ->where('lesson_teacher',session('user_id'))
            ->where('lesson_school',$user['user_school'])
            ->all();
$exam = $db->from('exams')->where('exam_code',$id)->first();
require admin_view('edit-exam');

?>
