<?php

if (session('user_rank')==3) {
  $query = $db->from('lesson_video')
              ->where('video_code',route(2))
              ->first();
}else {
  $query = $db->from('lesson_video')
              ->where('video_code',route(2))
              ->where('video_class',$user['user_class'])
              ->first();
}

$view = $db->from('video_views')
           ->where('view_video',route(2))
           ->join('users','%s.user_id=%s.view_user','left')
           ->orderby('view_date','DESC')
           ->all();

require admin_view('lesson-video');

?>
