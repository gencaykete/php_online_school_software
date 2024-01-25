<li<?=route(1)=='index' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url()?>">
    <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
    <span class="menu-text">Anasayfa</span>
  </a>
</li>

<li<?=route(1)=='my-students' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('my-students')?>">
    <i class="menu-icon zmdi zmdi-graduation-cap zmdi-hc-lg"></i>
    <span class="menu-text">Öğrencilerim</span>
  </a>
</li>

<li<?=in_array(route(1),['select-user','send-message']) ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('send-message')?>">
    <i class="menu-icon zmdi zmdi-comment zmdi-hc-lg"></i>
    <span class="menu-text">Mesajlarım</span>
  </a>
</li>
