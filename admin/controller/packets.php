<?php
admin_page();
$query = $db->from('packets')
            ->orderby('packet_id','DESC')
            ->all();

require admin_view('packets');

?>
