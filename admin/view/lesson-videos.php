<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg">
					<div class="row">
            <div class="col-md-4">
              <h4 class="m-b-lg"><?=$lesson['lesson_class']?>. Sınıf <?=$lesson['lesson_name']?> Dersi Videoları</h4>
            </div>
            <?php if (session('user_rank')==3): ?>
              <div class="col-md-8 text-right">
                <a href="<?=admin_url('add-video/'.route(2))?>" class="btn btn-success btn-sm rounded">Video Ekle <i class="fa fa-plus"></i> </a>
                <a href="<?=admin_url('add-homework/'.route(2))?>" class="btn btn-danger btn-sm rounded">Ödev Ekle <i class="fa fa-plus"></i> </a>
              </div>
            <?php endif; ?>
          </div>
					<div class="row">
            <?php if(count($query)>0){ ?>
              <?php foreach ($query as $row):$v=$db->from('video_views')->where('view_video',$row['video_code'])->all();if(session('user_rank')==4){$mv=$db->from('video_views')->where('view_video',$row['video_code'])->where('view_user',session('user_id'))->all();} ?>
                <div class="col-md-3" style="position:relative;">
                  <a href="<?=admin_url('lesson-video/'.$row['video_code'])?>">
                    <img src="<?=site_url('upload/video.png')?>" alt="">
                  </a>
                  <a href="<?=admin_url('lesson-video/'.$row['video_code'])?>" class="text-dark" style="display: block;padding:10px 5px">
                    <span style="font-size:18px;font-weight:bold;float:left;"><?=$row['video_title']?></span>
                    <span style="font-size:18px;font-weight:bold;float:right;"><?=count($v)?> <i class="fa fa-eye"></i></span>
                  </a>
                  <?php if (session('user_rank')==4): ?>
                    <?php if (count($mv)==0){ ?>
                      <div style="position:absolute;top:0;right:12px;background-color:red;color:#fff;padding:5px 20px;width:auto;font-weight:bold">
                        Görüntülenmedi
                      </div>
                    <?php }else{ ?>
                      <div style="position:absolute;top:0;right:12px;background-color:green;color:#fff;padding:5px 20px;width:auto;font-weight:bold">
                        Görüntülendi
                      </div>
                    <?php } ?>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            <?php }else{ ?>
              <div class="alert alert-danger">
                Henüz ders eklenmemiş
              </div>
            <?php } ?>
          </div>
				</div><!-- .widget -->
			</div><!-- END column -->
		</div><!-- .row -->
	</section><!-- #dash-content -->
</div><!-- .wrap -->
  <!-- APP FOOTER -->
  <div class="wrap p-t-0">
    <footer class="app-footer">
      <div class="clearfix">
        <ul class="footer-menu pull-right">
          <li><a href="javascript:void(0)">Careers</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
          <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
        </ul>
        <div class="copyright pull-left">Copyright RaThemes 2016 &copy;</div>
      </div>
    </footer>
  </div>
  <!-- /#app-footer -->
</main>
<?php require admin_view('static/footer'); ?>
