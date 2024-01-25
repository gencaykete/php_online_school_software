<?php

if (session('user_rank')==4) {
  $query = $db->from('users')
              ->where('user_rank',3)
              ->where('user_school',$user['user_school'])
              ->all();
  require admin_view('messages');
}else {
  $query = $db->from('users')
              ->where('user_rank',4)
              ->where('user_school',$user['user_school'])
              ->all();
  require admin_view('t-messages');
}



?>
