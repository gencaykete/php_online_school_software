<?php require view('static/header'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12" style="min-height:500px">
      <h1 class="text-center"><?=$query['duyuru_title']?></h1>
      <?=htmlspecialchars_decode($query['duyuru_detay'])?>
    </div>
  </div>
</div>

<?php require view('static/footer'); ?>
