<?php
admin_page();
$slider = $db->from('sliders')->orderby('slider_id','DESC')->all();

require admin_view('sliders');

?>
