<?php
teacher_page();

$query = $db->from('homework_files')
            ->where('file_school',$user['user_school'])
            ->where('file_homework',route(2))
            ->join('users','%s.user_id=%s.file_user','left')
            ->join('homeworks','%s.homework_id=%s.file_homework','left')
            ->all();

require admin_view('homework-files');




?>
