<?php
admin_page();
$query = $db->from('users')->where('user_rank',2)->orderby('user_id','DESC')->all();

require admin_view('users');

?>
