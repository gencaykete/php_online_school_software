<?php

$query = $db->from('homeworks')
            ->where('homework_school',$user['user_school'])
            ->where('homework_lesson',route(2))
            ->all();

if (session('user_rank')==3) {
  require admin_view('homeworks');
}elseif (session('user_rank')==4) {
  require admin_view('homeworks-student');
}

?>
