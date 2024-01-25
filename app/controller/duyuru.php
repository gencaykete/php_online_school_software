<?php

$query = $db->from('duyuru')->where('duyuru_id',route(1))->first();

require view('duyuru');

?>
