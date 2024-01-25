<?php
school_page();
$query = $db->from('users')
            ->where('user_school',session('user_id'))
            ->where('user_rank',4)
            ->orderby('user_id','DESC')
            ->all();

require admin_view('students');

?>
