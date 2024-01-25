<?php
veli_page();

$query = $db->from('users')
            ->where('user_school',$user['user_school'])
            ->where('user_veli',session('user_id'))
            ->all();

require admin_view('my-students');

?>
