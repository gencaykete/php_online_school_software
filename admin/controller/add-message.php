<?php

$add = $db->insert('message_detail')
          ->set([
            'message_sender' => $user['user_id'],
            'message_desc' => post('mesaj'),
            'ust_message' => post('ust_message'),
            'message_date' => date('d.m.Y H:i:s')
          ]);

?>
