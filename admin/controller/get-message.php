<?php

$query=$db->from('chat_message')
          ->where('message_chat',post('chat'))
          ->orderby('message_id','ASC')
          ->all();

foreach ($query as $row) {
  echo '<div data-toggle="tooltip" title="';
  echo timeConvert($row['message_date']);
  echo '" class="';
  echo $row['message_sender']==session('user_id') ? 'me' : 'to';
  echo '">';
  echo $row['message_text'];
  echo '</div>';
}



?>
