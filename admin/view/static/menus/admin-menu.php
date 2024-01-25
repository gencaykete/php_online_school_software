<li<?=route(1)=='index' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url()?>">
    <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
    <span class="menu-text">Anasayfa</span>
  </a>
</li>

<li class="has-submenu<?=in_array(route(1),['schools','add-school','edit-school']) ? ' active' : NULL ?>">
  <a href="javascript:void(0)" class="submenu-toggle">
    <i class="menu-icon zmdi zmdi-graduation-cap zmdi-hc-lg"></i>
    <span class="menu-text">Okullar</span>
    <span class="label label-warning menu-label">2</span>
    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
  </a>
  <ul class="submenu">
    <li><a href="<?=admin_url('schools')?>"><span class="menu-text">Okulları Listele</span></a></li>
    <li><a href="<?=admin_url('add-school')?>"><span class="menu-text">Okul Ekle</span></a></li>
  </ul>
</li>

<li<?=route(1)=='payments' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('payments')?>">
    <i class="menu-icon zmdi zmdi-money zmdi-hc-lg"></i>
    <span class="menu-text">Ödemeler</span>
  </a>
</li>

<li<?=route(1)=='report' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('report')?>">
    <i class="menu-icon zmdi zmdi-chart-donut zmdi-hc-lg"></i>
    <span class="menu-text">Raporlar</span>
  </a>
</li>

<li<?=route(1)=='settings' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('settings')?>">
    <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
    <span class="menu-text">Ayarlar</span>
  </a>
</li>
