<?php
school_page();
$query = $db->from('class')
            ->where('class_school',session('user_id'))
            ->orderby('class_id','DESC')
            ->join('users','users.user_id = class.class_teacher','left')
            ->all();

require admin_view('class');

?>
