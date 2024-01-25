<?php

if (session('user_rank')==4) {
  $video_code = post('video_code');
  $video_user = session('user_id');

  $add=$db->insert('video_views')
          ->set([
            'view_video' => $video_code,
            'view_user' => $video_user
          ]);
}


?>
