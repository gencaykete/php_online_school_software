<?php
teacher_page();

if (!route(2)) {
  $query = $db->from('etkinlik')
              ->where('etkinlik_school',$user['user_school'])
              ->join('class','class.class_id = etkinlik.etkinlik_class','left')
              ->orderby('etkinlik_id','DESC')
              ->all();
}else {
  $query = $db->from('e_student')
              ->where('etkinlik_id',route(2))
              ->join('ogrenciler','ogrenciler.ogrenci_id = e_student.student_id','left')
              ->orderby('e_id','DESC')
              ->all();

}

require admin_view('etkinlikler');

?>
