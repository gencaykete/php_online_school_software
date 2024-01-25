<?php
school_page();
$query = $db->from('notices')
            ->where('notice_school',session('user_id'))
            ->orderby('notice_date','DESC')
            ->all();

require admin_view('notices');

?>
