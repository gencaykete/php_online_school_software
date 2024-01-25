<?php
$message=0;
$user_one = route(2);
$user_two = route(3);

if ($user_one && $user_two) {
  $message = $db->from('chat')
                ->where('chat_user_1',$user_one)
                ->where('chat_user_2',$user_two)
                ->first();


  if ($message) {
    $last=$message['chat_id'];
    admin_go('send-message/'.$last);
  }else {
    $db->insert('chat')
       ->set([
         'chat_user_1'=>$user_one,
         'chat_user_2'=>$user_two
       ]);
    $last=$db->lastId();
    admin_go('send-message/'.$last);
  }
  exit;
}

$chat=$db->from('chat')->where('chat_id',$user_one)->first();
if (session('user_rank')!=3) {
  $my_chat=$db->from('chat')
              ->where('chat_user_2',session('user_id'))
              ->join('users','%s.user_id=%s.chat_user_1','left')
              ->orderby('chat_id','DESC')
              ->all();
}else {
  $my_chat=$db->from('chat')
              ->where('chat_user_1',session('user_id'))
              ->join('users','%s.user_id=%s.chat_user_2','left')
              ->orderby('chat_id','DESC')
              ->all();
}
$query = $db->from('chat_message')
            ->where('message_chat',$user_one)
            ->orderby('message_id','ASC')
            ->all();

foreach ($query as $row) {
  $up=$db->update('chat_message')
         ->where('message_chat',$user_one)
         ->set(['message_view'=>1]);
}
$user1=$db->from('users')->where('user_id',$chat['chat_user_1'])->first();
$user2=$db->from('users')->where('user_id',$chat['chat_user_2'])->first();

if ($chat['chat_user_1']!=session('user_id') && $chat['chat_user_2']!=session('user_id') && $user_one) {
  admin_go('send-message');
  exit;
}

require admin_view('send-message');

?>
