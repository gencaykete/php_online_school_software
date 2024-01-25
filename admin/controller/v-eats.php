<?php
veli_page();
$query = $db->from('eats')
            ->join('ogrenciler','ogrenciler.ogrenci_id = eats.eat_student','left')
            ->orderby('eat_id','DESC')
            ->all();

require admin_view('v-eats');

?>
