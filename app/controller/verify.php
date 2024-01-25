<?php

$query = $db->update('users')
            ->where('user_verify',route(1))
            ->set([
              'user_verify' => rand(1000,9999),
              'user_onay' => 1
            ]);

if ($query) {
  echo "Üyeliğiniz Onaylandı";
  go('admin','2');
}else {
  echo "Bir Hata Oluştu";
}

?>
