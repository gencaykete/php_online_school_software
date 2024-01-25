<?php
admin_page();
$query = $db->from('contact')->orderby('contact_date','DESC')->all();

foreach ($query as $row) {
  $up = $db->update('contact')
           ->where('contact_id',$row['contact_id'])
           ->set([
             'contact_read' => '1'
           ]);
}

require admin_view('contact');

?>
