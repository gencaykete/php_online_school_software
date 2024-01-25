<?php require view('static/header'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center"><?=$query['page_title']?></h1>
      <?=htmlspecialchars_decode($query['page_detail'])?>
    </div>
  </div>
</div>
<div style="clear:both;"></div>
<div style="clear:both;"></div>
<div style="clear:both;"></div>
<?php require view('static/footer'); ?>
