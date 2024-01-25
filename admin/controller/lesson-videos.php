<?php

$query = $db->from('lesson_video')
            ->where('video_school',$user['user_school'])
            ->where('video_lesson',route(2))
            ->orderby('video_id','DESC')
            ->all();

$lesson = $db->from('lessons')->where('lesson_school',$user['user_school'])->where('lesson_id',route(2))->first();
if (session('user_rank')==4 && $lesson['lesson_class']!=$user['user_class']) {
  admin_go('');
  exit();
}
require admin_view('lesson-videos');

?>
