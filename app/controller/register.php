<?php

if (post('submit')) {
  if (post('user_message') == 'on') {
    $user_message = "1";
  }else {
    $user_message = "0";
  }
  $user_name = post('user_name');
  $user_surname = post('user_surname');
  $user_username = permalink($user_name.$user_surname);
  $user_email = post('user_email');
  $user_tel = trim(post('user_tel'));
  $user_pass = md5(post('user_pass'));

  if (!$user_name || !$user_surname || !$user_email || !$user_tel || !$user_pass) {
    echo "Lütfen Tüm Alanları Doldurun !";
  }else {
    $q1 = $db->from('users')->where('user_email',$user_email)->select('count(user_id) as total')->total();
    if ($q1 == 0) {
      $q2 = $db->from('users')->where('user_tel',$user_tel)->select('count(user_id) as total')->total();
      if ($q2 == 0) {
        if (1) {
          $key = rand(1000,9999);
          $add = $db->insert('users')
                    ->set([
                      "user_name" => $user_name,
                      "user_surname" => $user_surname,
                      "user_username" => $user_username,
                      "user_email" => $user_email,
                      "user_tel" => $user_tel,
                      "user_pass" => $user_pass,
                      "user_message" => $user_message,
                      "user_verify" => $key
                    ]);
          if ($add) {
            otpsms('Üyelik%20Onay%20Linkiniz%20'.site_url('verify/'.$key),$user_tel);
            echo "Onay Mesajı Gönderildi";
          }else {
            echo "Kayıt Sırasında Bir Hata Oluştu";
          }
        }else {
          echo "İban Numası Sistemde Kayıtlı";
        }
      }else {
        echo "Telefon Numası Sistemde Kayıtlı";
      }
    }else {
      echo "Email Adresi Sistemde Kayıtlı";
    }
  }

}

?>
