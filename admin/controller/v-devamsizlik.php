<?php
veli_page();

$query = $db->from('ogrenciler')
            ->where('ogrenci_veli',$user['user_id'])
            ->orderby('ogrenci_id','DESC')
            ->all();

require admin_view('v-devamsizlik');

?>
