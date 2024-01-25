<?php

if (post('contact')) {
  $name = post('ad');
  $tel = post('tel');
  $email = post('email');
  $message = post('message');

  $add = $db->insert('contact')
            ->set([
              "contact_name" => $name,
              "contact_tel" => $tel,
              "contact_email" => $email,
              "contact_message" => $message
            ]);
  if ($add) {
    echo "<script>alert('Mesaj başarıyla gönderildi.')</script>";
  }else {
    echo "<script>alert('Mesaj gönderilirken bir hata oluştu !')</script>";
  }
}

$meta = [
  'title' => 'İletişim'
];

require view('contact');

?>
