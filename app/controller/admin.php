<?php

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    $route[1] = '404';
}

if (!session('user_rank') && $route[1]!='reset-pass'){
     $route[1] = "login";
}

if (session('user_id')) {
  $user = $db->from('users')->where('user_id',session('user_id'))->first();
  $up=$db->update('users')->where('user_id',session('user_id'))->set(['user_last'=>date('Y-m-d H:i:s')]);
}

require admin_controller(route(1));

?>
