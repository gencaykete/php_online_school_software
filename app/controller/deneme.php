<?php


$query = $db->from('lesson_video')->join('lessons','%s.lesson_id=%s.video_lesson')->all();

echo $db->getSqlString();


?>
