<?php

$video_code = post('video_code');

$query=$db->from('video_views')
          ->where('view_video',$video_code)
          ->join('users','%s.user_id=%s.view_user','left')
          ->orderby('view_date','DESC')
          ->all();

foreach ($query as $row) {
  echo "<li>";

  echo "<span class='pull-left'>";
  echo $row['user_name'];
  echo " Dersi Görüntüledi</span>";

  echo "<span class='pull-right'>";
  echo timeConvert($row['view_date']);
  echo "</span>";

  echo "</li>";
}

?>
