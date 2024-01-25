<?php
admin_page();
if (post('submit')) {
  $query = $db->from('abone')->all();

  foreach ($query as $row) {
    $mesaj = '<div style="background:#282d31;padding:20px 0;width:100%;height:100%"><div class="adM">
        </div><div style="color:#1b84e7;width:440px;height:60px;text-align:center;margin:auto;font-size:36px;letter-spacing:-2px;font-weight:700">İstanbul Yazılım<span style="color:#868ba1!important">.net</span></div>
        <div style="width:400px;height:300px;background-color:#212529;border:1px solid #343a40;margin:auto;border-radius:3px;padding:30px;text-align:center">
            <h2 style="color:#fff;font-weight:300;font-size:1.35rem">Merhaba '.$row['abone_name'].',</h2>
            <h3 style="margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:#868ba1"> '.post('subject').'</h3>
            <span style="font-family:inherit;font-weight:500;font-size:0.775rem;line-height:1.2;color:#868ba1">'.post('email').'</span>
            <a href="'.site_url().'" style="text-decoration:none;font-family:inherit;display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;border:1px solid transparent;padding:0.594rem 0;font-size:0.875rem;line-height:1.5;font-weight:500;font-size:13px;text-transform:uppercase;letter-spacing:1px;margin:20px 0;border:0;background-image:linear-gradient(to right,#1b84e7 0%,#6f42c1 100%);background-repeat:repeat-x;display:block;width:100%;color:#fff;background-color:#1b84e7" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.istanbulyazilim.net">Siteye Git</a>
            <p style="font-family:inherit;font-weight:500;line-height:1.2;font-size:0.775rem;color:#868ba1">E-posta: <a style="color:#868ba1">info@istanbulyazilim.net</a></p><div class="yj6qo"></div><div class="adL">
        </div></div><div class="adL">
    </div></div>';
    $send_email = send_email($row['abone_email'],$row['abone_name'],post('subject'),$mesaj);
    if ($send_email) {
      $success = 'Mailler Gönderildi';
    }else {
      $error = 'Sistem Hatası !';
    }
  }
}

require admin_view('send-mail');

?>
