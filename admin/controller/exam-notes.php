<?php

$query = $db->from('exam_notes')
            ->where('note_exam',route(2))
            ->orderby('note_point','DESC')
            ->join('users','%s.user_id=%s.note_user')
            ->all();

require admin_view('exam-notes');

?>
