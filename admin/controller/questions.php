<?php

$query = $db->from('questions')
            ->where('question_exam',route(2))
            ->all();

require admin_view('questions');

?>
