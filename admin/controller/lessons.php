<?php

$query = $db->from('lessons')
            ->where('lesson_school',session('user_id'))
            ->orderby('lesson_name','DESC')
            ->join('users','%s.user_id=%s.lesson_teacher','left')
            ->all();

require admin_view('lessons');

?>
