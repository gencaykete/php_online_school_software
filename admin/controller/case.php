<?php
school_page();
$query = $db->from('kasa')
            ->where('kasa_school',session('user_id'))
            ->orderby('kasa_id','DESC')
            ->all();

require admin_view('case');

?>
