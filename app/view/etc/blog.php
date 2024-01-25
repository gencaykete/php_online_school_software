<?php require view('static/header'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center"><?=$query['post_title']?></h1>
      <img src="<?=site_url($query['post_img'])?>" width="100%" height="350" alt="">
      <br><br>
      <?=htmlspecialchars_decode($query['post_desc'])?>
    </div>
  </div>
</div>
<div style="clear:both;"></div>
<div style="clear:both;"></div>
<div style="clear:both;"></div>
<?php require view('static/footer'); ?>
