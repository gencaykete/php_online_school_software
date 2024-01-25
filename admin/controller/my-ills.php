<?php
student_page();
$query = $db->from('ills')
            ->where('ill_school',$user['user_school'])
            ->where('ill_student',session('user_id'))
            ->orderby('ill_id','DESC')
            ->all();

require admin_view('my-ills');

?>
