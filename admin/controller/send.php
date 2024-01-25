<?php

if ($_POST) {
  $add = $db->insert('chat_message')
            ->set([
              'message_sender' => session('user_id'),
              'message_text' => post('msg'),
              'message_chat' => post('chat')
            ]);
  if ($add) {
    echo "1";
  }else {
    echo "0";
  }
}
?>
