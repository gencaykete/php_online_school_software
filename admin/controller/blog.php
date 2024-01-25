<?php
admin_page();
$query = $db->from('posts')->orderby('post_id','DESC')->all();

require admin_view('blog');

?>
