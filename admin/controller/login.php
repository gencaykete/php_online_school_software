<?php

if (post('submit')) {
  $username = post('email');
  $userpass = md5(post('pass'));
  $userpassc = post('pass');

  $row = User::userExist($username);
  if ($row['user_pass']==$userpass) {
    $success = "Başarıyla Giriş Yaptınız Yönlendiriliyorsunuz";
    if (post('remember') == 'on') {
      setcookie('user_username',$username,time()+2592000);
      setcookie('user_pass',$userpassc,time()+2592000);
    }else {
      setcookie('user_username',$username,time()-2592000);
      setcookie('user_pass',$userpassc,time()-2592000);
    }
    User::Login($row);
    go('admin',2);
  }else {
    $error = 'Kullanıcı Adı Veya Şifreniz Yanlış !';
  }
}
require admin_view('login');

?>
