<?php
teacher_page();
if (!route(2)) {
  $query = $db->from('class')
              ->where('class_school',$user['user_school'])
              ->where('class_teacher',session('user_id'))
              ->orderby('class_id','DESC')
              ->all();
}else {
  $query = $db->from('ogrenciler')
              ->where('ogrenci_okul',$user['user_school'])
              ->where('ogrenci_sinif',route(2))
              ->orderby('ogrenci_id','desc')
              ->join('users','users.user_id = ogrenciler.ogrenci_veli','left')
              ->all();

}

require admin_view('myclass');

?>
