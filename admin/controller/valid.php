<?php

$key=post('key');
$val=post('val');
$not=post('not');

if ($not == 'no') {
  $query = $db->from('users')
              ->where($key,$val)
              ->select('count(user_id) as total')
              ->total();
}else {
  $query = $db->from('users')
              ->where($key,$val)
              ->where('user_id',$not,'!=')
              ->select('count(user_id) as total')
              ->total();
}


if ($query > 0) {
  echo 1;
}else {
  echo 2;
}
?>
