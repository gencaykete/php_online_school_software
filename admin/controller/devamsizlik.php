<?php
teacher_page();

if (!route(2)) {
  $query = $db->from('devam')
              ->where('devam_school',$user['user_school'])
              ->where('devam_date',date('d.m.Y'))
              ->join('class','class.class_id = devam.devam_class','left')
              ->orderby('devam_id','DESC')
              ->all();
}else {
  $query = $db->from('d_student')
              ->where('devam_id',route(2))
              ->where('d_school',$user['user_school'])
              ->join('ogrenciler','ogrenciler.ogrenci_id = d_student.d_student','left')
              ->orderby('d_id','DESC')
              ->all();

}

require admin_view('devamsizlik');

?>
