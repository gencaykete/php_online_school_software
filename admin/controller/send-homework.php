<?php

$total = getAll('homework_files',['file_user'=>session('user_id'),'file_homework'=>route(2)],'first');

$query = $db->from('homeworks')
            ->where('homework_id',route(2))
            ->where('homework_school',$user['user_school'])
            ->join('lessons','%s.lesson_id = %s.homework_lesson','left')
            ->first();

if ($total>0) {
  $error = "Ödev zaten gönderildi";
  admin_go('homeworks/'.$query['lesson_id'],2);
}
if (getFinish($query['homework_date'])=='[NO_TIME]') {
  $error = "Ödevin Gönderim Süresi Dolmuştur";
  admin_go('homeworks/'.$query['lesson_id'],2);
}
if ($query['lesson_class']==$user['user_class']) {
  if ($_FILES) {
    $file = upload('file','homeworks');
    $add=$db->insert('homework_files')
            ->set([
              'file_name' => $file,
              'file_homework' => route(2),
              'file_school' => $user['user_school'],
              'file_user' => session('user_id')
            ]);
  }
}else {
  $error="Bu ödev size ait değil";
  admin_go('homeworks',1.5);
}

require admin_view('send-homework');

?>
