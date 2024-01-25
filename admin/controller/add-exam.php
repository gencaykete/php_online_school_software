<?php

$query = $db->from('lessons')
            ->where('lesson_teacher',session('user_id'))
            ->where('lesson_school',$user['user_school'])
            ->all();

if (post('exam_date')) {
  $ex = explode('[EXP]',post('exam_lesson'));
  $code=md5(random_string(16));
  $data=[
    'exam_class'=>$ex[0],
    'exam_lesson'=>$ex[1],
    'exam_date' => post('exam_date'),
    'exam_teacher' => session('user_id'),
    'exam_school' => $user['user_school'],
    'exam_code' => $code,
    'exam_view' => post('exam_view')
  ];
  $add = $db->insert('exams')->set($data);
  if ($add) {
    $success="Sınav Başarıyla Oluşturuldu. Soru Ekleme Sayfasına Yönlendiriliyorsunuz.";
    admin_go('add-question/'.$code,2);
  }else {
    $error="Bir Hata Oluştu !";
  }
}

require admin_view('add-exam');

?>
