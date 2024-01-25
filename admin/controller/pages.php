<?php
admin_page();
$query = $db->from('pages')->orderby('page_id','DESC')->all();

require admin_view('pages');

?>
