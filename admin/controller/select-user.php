<?php

if (session('user_rank')==3) {
  $query = $db->from('users')
              ->where('user_rank',3)
              ->or_where('user_rank',4)
              ->or_where('user_rank',5)
              ->where('user_school',$user['user_school'])
              ->all();
}elseif (session('user_rank')==4) {
  $query = $db->from('users')
              ->where('user_rank',3)
              ->where('user_school',$user['user_school'])
              ->all();
}elseif (session('user_rank')==5) {
  $query = $db->from('users')
              ->where('user_rank',3)
              ->where('user_school',$user['user_school'])
              ->all();
}

require admin_view('select-user');

?>
