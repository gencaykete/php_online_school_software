<li<?=route(1)=='index' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url()?>">
    <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
    <span class="menu-text">Anasayfa</span>
  </a>
</li>

<li<?=route(1)=='my-lessons' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('my-lessons')?>">
    <i class="menu-icon zmdi zmdi-graduation-cap zmdi-hc-lg"></i>
    <span class="menu-text">Derslerim</span>
  </a>
</li>

<li<?=route(1)=='my-ills' ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('my-ills')?>">
    <i class="menu-icon zmdi zmdi-plus zmdi-hc-lg"></i>
    <span class="menu-text">Sağlık Sistemi</span>
  </a>
</li>

<li<?=in_array(route(1),['select-user','send-message']) ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('send-message')?>">
    <i class="menu-icon zmdi zmdi-comment zmdi-hc-lg"></i>
    <span class="menu-text">Mesajlarım</span>
  </a>
</li>

<li<?=in_array(route(1),['exams','add-exam','edit-exam','add-question','questions','edit-question']) ? ' class="active"' : NULL ?>>
  <a href="<?=admin_url('exams')?>">
    <i class="menu-icon zmdi zmdi-calendar zmdi-hc-lg"></i>
    <span class="menu-text">Sınavlar</span>
  </a>
</li>
