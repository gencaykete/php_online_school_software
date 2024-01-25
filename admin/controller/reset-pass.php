<?php

if ($_POST) {
  $email = post('email');
  $sor = $db->from('users')
            ->where('user_email',$email)
            ->first();
  if ($sor) {
    $pass = md5(rand(10,99).'g'.rand(10,99));
    $pass = substr($pass,5,7);
    $pass_md = md5($pass);
    $upt = $db->update('users')
              ->where('user_email',$email)
              ->set([
                'user_pass' => $pass_md
              ]);
    send_email($email,setting('title'),'Şifre Yenileme',$pass);
    $success = "Yeni Şifreniz Mail Olarak Gönderildi";
  }else {
    $error = "Email adresi sistemde kayıtlı değil";
  }
}

require admin_view('reset-pass');

?>
