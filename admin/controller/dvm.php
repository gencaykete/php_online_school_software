<?php
teacher_page();
$query = $db->from('d_student')
            ->where('d_school',$user['user_school'])
            ->where('d_id',route(3))
            ->join('ogrenciler','ogrenciler.ogrenci_id = d_student.d_student','left')
            ->join('devam','d_student.devam_id = devam.devam_id','left')
            ->first();

if (route(2)==2) {
  $up=$db->update('d_student')
         ->where('d_school',$user['user_school'])
         ->where('d_id',route(3))
         ->set([
           'd_type' => 1
         ]);
 if ($up) {
   admin_go('devamsizlik/'.$query['devam_id']);
 }
}else {
  if (post('submit')) {
    $up=$db->update('d_student')
           ->where('d_school',$user['user_school'])
           ->where('d_id',route(3))
           ->set([
             'd_type' => 2,
             'd_desc' => post('d_desc')
           ]);
    if ($up) {
      admin_go('devamsizlik/'.$query['devam_id']);
    }
  }
  require admin_view('dvm');
}


?>
