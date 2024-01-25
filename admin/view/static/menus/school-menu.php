<li<?=route(1)=='index' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url()?>">
    <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
    <span class="menu-text">Anasayfa</span>
  </a>
</li>

<li class="has-submenu<?=in_array(route(1),['schools','add-school','edit-school']) ? ' active' : NULL ?>">
  <a href="javascript:void(0)" class="submenu-toggle">
    <i class="menu-icon zmdi zmdi-graduation-cap zmdi-hc-lg"></i>
    <span class="menu-text">Öğretmenler</span>

    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
  </a>
  <ul class="submenu">
    <li><a href="<?=admin_url('teachers')?>"><span class="menu-text">Öğretmenleri Listele</span></a></li>
    <li><a href="<?=admin_url('add-teacher')?>"><span class="menu-text">Öğretmen Ekle</span></a></li>
  </ul>
</li>

<li class="has-submenu<?=in_array(route(1),['schools','add-school','edit-school']) ? ' active' : NULL ?>">
  <a href="javascript:void(0)" class="submenu-toggle">
    <i class="menu-icon zmdi zmdi-graduation-cap zmdi-hc-lg"></i>
    <span class="menu-text">Öğrenciler</span>

    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
  </a>
  <ul class="submenu">
    <li><a href="<?=admin_url('students')?>"><span class="menu-text">Örencileri Listele</span></a></li>
    <li><a href="<?=admin_url('add-student')?>"><span class="menu-text">Örenci Ekle</span></a></li>
  </ul>
</li>
<li class="has-submenu<?=in_array(route(1),['veliler','add-veli','edit-veli']) ? ' active' : NULL ?>">
  <a href="javascript:void(0)" class="submenu-toggle">
    <i class="menu-icon zmdi zmdi-account zmdi-hc-lg"></i>
    <span class="menu-text">Veliler</span>

    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
  </a>
  <ul class="submenu">
    <li><a href="<?=admin_url('veliler')?>"><span class="menu-text">Velileri Listele</span></a></li>
    <li><a href="<?=admin_url('add-veli')?>"><span class="menu-text">Veli Ekle</span></a></li>
  </ul>
</li>
<li class="has-submenu<?=in_array(route(1),['lessons','add-lesson','edit-lesson']) ? ' active' : NULL ?>">
  <a href="javascript:void(0)" class="submenu-toggle">
    <i class="menu-icon zmdi zmdi-graduation-cap zmdi-hc-lg"></i>
    <span class="menu-text">Dersler</span>

    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
  </a>
  <ul class="submenu">
    <li><a href="<?=admin_url('lessons')?>"><span class="menu-text">Dersleri Listele</span></a></li>
    <li><a href="<?=admin_url('add-lesson')?>"><span class="menu-text">Ders Ekle</span></a></li>
  </ul>
</li>
<li class="has-submenu<?=in_array(route(1),['notices','add-notice','edit-notice']) ? ' active' : NULL ?>">
  <a href="javascript:void(0)" class="submenu-toggle">
    <i class="menu-icon zmdi zmdi-notifications zmdi-hc-lg"></i>
    <span class="menu-text">Duyurular</span>

    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
  </a>
  <ul class="submenu">
    <li><a href="<?=admin_url('notices')?>"><span class="menu-text">Duyuruları Listele</span></a></li>
    <li><a href="<?=admin_url('add-notice')?>"><span class="menu-text">Duyuru Ekle</span></a></li>
  </ul>
</li>
<li class="has-submenu<?=in_array(route(1),['programs']) ? ' active' : NULL ?>">
  <a href="javascript:void(0)" class="submenu-toggle">
    <i class="menu-icon zmdi zmdi-calendar zmdi-hc-lg"></i>
    <span class="menu-text">Ders Programları</span>
    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
  </a>
  <ul class="submenu">
    <?php foreach ($q as $r): ?>
      <li><a href="<?=admin_url('programs/'.$r['lesson_class'])?>"><span class="menu-text"><?=$r['lesson_class']?>. Sınıf</span></a></li>
    <?php endforeach; ?>
  </ul>
</li>
<li class="has-submenu<?=in_array(route(1),['ills','add-ill']) ? ' active' : NULL ?>">
  <a href="javascript:void(0)" class="submenu-toggle">
    <i class="menu-icon zmdi zmdi-plus zmdi-hc-lg"></i>
    <span class="menu-text">Öğrenci Sağlık Sistemi</span>

    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
  </a>
  <ul class="submenu">
    <li><a href="<?=admin_url('ills')?>"><span class="menu-text">Geçmiş Sağlık Bilgileri</span></a></li>
    <li><a href="<?=admin_url('add-ill')?>"><span class="menu-text">Sağlık Durumu Ekle</span></a></li>
  </ul>
</li>
