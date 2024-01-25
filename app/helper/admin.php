<?php

function admin_controller($controllerName)
{
    $controllerName = strtolower($controllerName);
    return PATH . '/admin/controller/' . $controllerName . '.php';
}

function admin_view($viewName)
{
    return PATH . '/admin/view/' . $viewName . '.php';
}


function admin_url($url = false)
{
    return ltrim(URL,'/') . '/admin/' . $url;
}
function admin_go($url,$time=0){
  header('refresh:'.$time.';url='.admin_url($url));
}
function admin_public_url($url = false)
{
    return URL . '/admin/public/' . $url;
}

function user_ranks($rankId = null)
{
    $ranks = [
        1 => 'admin',
        2 => 'school',
        3 => 'teacher',
        4 => 'student',
        5 => 'veli'
    ];
    return $rankId ? $ranks[$rankId] : $ranks;
}

function getRank($rankId = null)
{
    $ranks = [
        1 => 'Herkes',
        2 => 'Okul',
        3 => 'Öğretmen',
        4 => 'Öğrenci',
        5 => 'Veli'
    ];
    return $rankId ? $ranks[$rankId] : $ranks;
}

function permission($url, $action){
    $permissions = json_decode(session('user_permissions'), true);
    if (isset($permissions[$url][$action]))
        return true;
    return false;
}

function permission_page(){
    die('Bu bölümü görüntüleme yetkiniz yok!');
    exit;
}

function img($name){
  return URL.'/upload/files/'.$name;
}

function send_email($email, $name, $subject, $message)
{
    $mail = new PHPMailer(true);
    try {

        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = setting('smtp_host');
        $mail->SMTPAuth = true;
        $mail->Username = setting('smtp_email');
        $mail->Password = setting('smtp_password');
        $mail->SMTPSecure = setting('smtp_secure');
        $mail->Port = setting('smtp_port');
        $mail->CharSet = 'UTF-8';

        $mail->setFrom(setting('smtp_send_email'), setting('smtp_send_name'));
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        return true;

    } catch (Exception $e) {
        //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        return false;
    }

}

function tarih($a){
  $exp = explode('-',$a);
  $date = $exp[2].'-'.$exp[1].'-'.$exp['0'];
  return $date;

}

function admin_page(){
  if (session('user_rank') != 1) {
    admin_go('');
    exit();
  }
}

function school_page(){
  if (session('user_rank') != 2) {
    admin_go('');
    exit();
  }
}
function teacher_page(){
  if (session('user_rank') != 3) {
    admin_go('');
    exit();
  }
}
function student_page(){
  if (session('user_rank') != 4) {
    admin_go('');
    exit();
  }
}
function veli_page(){
  if (session('user_rank') != 5) {
    admin_go('');
    exit();
  }
}
function getFinish($date){
  $date=str_replace('/','-',$date);
  $tarih1 = new DateTime($date);
  $tarih2 = new DateTime();
  $sonuc = strtotime($date)-strtotime(date('Y-m-d H:i:s'));
  if ($sonuc>0) {
    $fark = $tarih1->diff($tarih2);
    $tarih = $fark->format('%y Yıl %m Ay %d Gün %h Saat %i Dakika');

    $tarih = str_replace(
      ['0 Yıl',' 0 Ay',' 0 Gün',' 0 Saat',' 0 Dakika'],
      '',
      $tarih
    );
    return $tarih;
  }else {
    return "[NO_TIME]";
  }
}
function getMenu($rank){
  global $q;
  $menu_name = user_ranks($rank);
  require admin_view('static/menus/'.$menu_name.'-menu');
}
function getAll($table,$options=[],$getType='all'){
  global $db;
  $code="";
  $code.='$total = $db->from(\''.$table.'\')';
  foreach ($options as $key => $value) {
    $code.='->where(\''.$key.'\',\''.$value.'\')';
  }
  $code.='->'.$getType.'();';
  eval($code);
  if (is_array($total) && count($total)>0) {
    return $total;
  }else {
    return false;
  }
}
function notify($user,$text,$url=''){
  global $db;
  $insert = $db->insert('notify')
               ->set([
                 'notify_user' => $user,
                 'notify_text' => $text,
                 'notify_url' => $url
               ]);
}
