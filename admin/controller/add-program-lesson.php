<?php

if ($_POST) {
  $arr = [];
  for ($i=1;$i<=7;$i++) {
    $arr[]=[
      'p_l_time' => post('p_l_time_'.$i),
      'p_l_1' => post('p_l_1_'.$i),
      'p_l_2' => post('p_l_2_'.$i),
      'p_l_3' => post('p_l_3_'.$i),
      'p_l_4' => post('p_l_4_'.$i),
      'p_l_5' => post('p_l_5_'.$i),
      'p_l_6' => post('p_l_6_'.$i),
      'p_l_7' => post('p_l_7_'.$i),
      'p_l_class' => route(2),
      'p_l_school' => session('user_id')
    ];
  }
  $delete = $db->delete('programs')->where('p_l_class',route(2))->where('p_l_school',session('user_id'))->done();
  foreach ($arr as $row) {
    $add = $db->insert('programs')->set($row);
  }
  if ($add) {
    $success="Ders Programı Kaydedildi";
    admin_go('programs/'.route(2),1.5);
  }else {
    $error="Bir Hata Oluştu";
  }
}

$query = $db->from('lessons')->where('lesson_class',route(2))->where('lesson_school',session('user_id'))->all();
$program = $db->from('programs')->where('p_l_class',route(2))->where('p_l_school',session('user_id'))->all();

require admin_view('add-program-lesson');

?>
