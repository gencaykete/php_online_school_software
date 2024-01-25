<?php

if (post('submit')) {
  $devam = 0;
  unset($_POST['submit']);
  $data = [];
  foreach ($_POST as $key => $value) {
    $data[$key] = $value;
  }
}

if (session('user_rank') == 2 || empty(route(2))) {
  if ($_POST) {
    if (!empty($data['user_pass'])) {
      if ($data['user_pass'] == $data['confirm_pass']) {
        unset($data['confirm_pass']);
        if (strlen($data['user_pass']) >= 6) {
          $row = $db->from('users')->where('user_username',session('user_username'))->first();
          if (md5($data['user_pass']) == $row['user_pass']) {
            $error = "Şifreniz Eski Şifreniz İle Aynı Olamaz !";
          }else {
            $data['user_pass'] = md5($data['user_pass']);
            $devam = 1;
          }
        }else {
          $error = "Şifreniz En Az 6 Karakter Olmalıdır.";
        }
      }else {
        $error = "Şifreler Eşleşmiyor !";
      }
    }else{
      unset($data['user_pass']);
      unset($data['confirm_pass']);
    }
    if (!isset($error)) {
      if ($_FILES['user_img']['size'] > 0) {
        $data['user_profile'] = upload('user_img');
      }
      $up = $db->update('users')
               ->where('user_id',session('user_id'))
               ->set($data);
     if ($up) {
       $success = "Profil bilgileri güncellendi.";
     }else {
       $error = "Bir Hata Oluştu !";
     }
    }
  }
  // Toplam Kazanç
  $tamamlanan = $db->from('siparis_tamamla')
                   ->where('siparis_user',session('user_id'))
                   ->all();
  $toplam_kazanc = 0;
  foreach ($tamamlanan as $row) {
    $toplam_kazanc += $row['siparis_tutar'];
  }

  // Bakiye
  $users = $db->from('users')->where('user_username',session('user_username'))->first();
  $bakiye = $users['user_total'];

  // Tamamlanan Siparişler
  $tamamlanan_siparis = count($tamamlanan);

}else {
if ($_POST) {
  if (!empty($data['user_pass'])) {
    if ($data['user_pass'] == $data['confirm_pass']) {
      unset($data['confirm_pass']);
      if (strlen($data['user_pass']) >= 6) {
        $row = $db->from('users')->where('user_username',route(2))->first();
        if (md5($data['user_pass']) == $row['user_pass']) {
          $error = "Şifre Eski Şifresi İle Aynı Olamaz !";
        }else {
          $data['user_pass'] = md5($data['user_pass']);
          $devam = 1;
        }
      }else {
        $error = "Şifre En Az 6 Karakter Olmalıdır.";
      }
    }else {
      $error = "Şifreler Eşleşmiyor !";
    }
  }else{
    unset($data['user_pass']);
    unset($data['confirm_pass']);
  }
}
  if ($_POST) {
    if (!isset($error)) {
      if ($_FILES['user_img']['size'] > 0) {
        $data['user_profile'] = upload('user_img');
      }
      $up = $db->update('users')
               ->where('user_id',route(3))
               ->set($data);
     if ($up) {
       $success = "Profil bilgileri güncellendi.";
     }else {
       $error = "Bir Hata Oluştu !";
     }
    }
  }
  // Toplam Kazanç
  $tamamlanan = $db->from('siparis_tamamla')
                   ->where('siparis_user',route(3))
                   ->all();
  $toplam_kazanc = $db->from('kazanc')
                      ->where('kazanc_user',route(3))
                      ->first();
  $toplam_kazanc = $toplam_kazanc['kazanc_bakiye'];
  // Bakiye
  $users = $db->from('users')->where('user_username',route(2))->first();
  $bakiye = $users['user_total'];

  // Tamamlanan Siparişler
  $tamamlanan_siparis = count($tamamlanan);

$user = $db->from('users')->where('user_id',route(3))->first();
}

require admin_view('profile');

?>
