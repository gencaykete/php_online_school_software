<?php require view('static/header'); ?>
  <div class="container">
    <div class="row">
      <br>
      <?php $c=count($query); foreach ($query as $row): ?>
        <div class="col-md-4" style="margin-bottom: 20px;">
          <div class="card">
            <img class="card-img-top" src="<?=site_url($row['post_img'])?>" width="100%" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title text-primary"><?=$row['post_title']?></h5>
                  <p class="card-text"><?=mb_substr(strip_tags(htmlspecialchars_decode($row['post_desc'])),0,94)?>..</p>
               <hr>
               <a href="<?=site_url('blog/'.$row['post_seo'])?>" class="btn btn-danger pull-right shadow-primary">Devamını Oku</a>
            </div>
         </div>
       </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php require view('static/footer'); ?>
