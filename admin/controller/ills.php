<?php
school_page();
$query = $db->from('ills')
            ->where('ill_school',session('user_id'))
            ->orderby('ill_id','DESC')
            ->join('users','%s.user_id = %s.ill_student','left')
            ->all();

require admin_view('ills');

?>
