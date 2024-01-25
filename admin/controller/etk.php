<?php
teacher_page();
$query = $db->from('e_student')
            ->where('e_school',$user['user_school'])
            ->where('e_id',route(3))
            ->join('ogrenciler','ogrenciler.ogrenci_id = e_student.student_id','left')
            ->join('etkinlik','etkinlik.etkinlik_id = e_student.etkinlik_id','left')
            ->first();


if (route(2)==2) {
  $up=$db->update('e_student')
         ->where('e_school',$user['user_school'])
         ->where('e_id',route(3))
         ->set([
           'student_type' => 1
         ]);
 if ($up) {
   admin_go('etkinlikler/'.$query['etkinlik_id']);
 }
}else {
  if (post('submit')) {
    $up=$db->update('e_student')
           ->where('e_school',$user['user_school'])
           ->where('e_id',route(3))
           ->set([
             'student_type' => 2,
             'student_desc' => post('e_desc')
           ]);
    if ($up) {
      admin_go('etkinlikler/'.$query['etkinlik_id']);
    }
  }
  require admin_view('etk');
}


?>
