<?php

$query = $db->from('programs')
            ->where('p_l_class',route(2))
            ->where('p_l_school',session('user_id'))
            ->all();

$color = [];
$class=['primary','purple','warning','danger','success','info','pink','inverse'];
$lesson = $db->from('lessons')->where('lesson_class',route(2))->where('lesson_school',session('user_id'))->all();
$i=-1;
foreach ($lesson as $row) {
  $i++;
  $color[permalink($row['lesson_name'])]=$class[$i];
}

require admin_view('programs');

?>
