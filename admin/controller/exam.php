<?php

$exam_code = route(2);
$step = route(3) ? route(3) : '0';
$cek = getAll('exam_notes',['note_exam'=>$exam_code,'note_user'=>session('user_id')]);
if ($cek && $step!='finish') {
  $error="Bu sınava zaten katıldınız";
  admin_go('exams',1.5);
}

$query=$db->from('exams')->where('exam_code',$exam_code)->join('lessons','%s.lesson_id=%s.exam_lesson')->first();
if (getFinish($query['exam_date']) == '[NO_TIME]') {
  $error = "Sınav Süresi Doldu !";
  admin_go('exams',1.5);
}
$question=$db->from('questions')->where('question_exam',$exam_code)->all();
$max_step=count($question);

if ($step!='0' && $step!='finish') {
  $soru=$question[$step-1];
  if ($_POST) {
    if (post('question_ansver')==$soru['question_correct_ansver']) {
      $_SESSION['point']+=$soru['question_point'];
      $_SESSION['corrects'].=$step.',';
    }else {
      $_SESSION['errors'].=$step.',';
    }

    $step++;
    if ($step!=$max_step+1) {
      admin_go('exam/'.route(2).'/'.$step);
    }else {
      $add=$db->insert('exam_notes')
              ->set([
                'note_user' => session('user_id'),
                'note_exam' => route(2),
                'note_point' => session('point')
              ]);
      admin_go('exam/'.route(2).'/finish');
    }
  }
}else {
  $_SESSION['corrects']='';
  $_SESSION['errors']='';
  $_SESSION['point']=0;
}
$_SESSION['step']=$step;

require admin_view('exam');

?>
