<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Ödev Dosyaları Yükle</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
          <?php if (getFinish($query['homework_date'])!='[NO_TIME]') { ?>
  					<div class="widget-body">
  						<form action="" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?=admin_url('send-homework/'.route(2))?>',maxFiles:1,acceptedFiles:'image/*,application/zip,application/octet-stream,application/x-zip-compressed,multipart/x-zip,.zip',addRemoveLinks:true}">
  							<div class="dz-message">
  								<h3 class="m-h-lg">Dosyaları Yükle</h3>
  								<p class="m-b-lg text-muted">(Lütfen Dosyaları Tek Bir Zip halinde Yükleyin. Not: Max 1 tane dosya yükleyebilirsiniz)</p>
  							</div>
  						</form>
              <br>
              <div class="col-md-12 text-center">
                <a href="<?=admin_url('homeworks/'.$query['lesson_id'])?>" class="btn btn-success">Kaydet</a>
              </div>
              <br><br>
  					</div><!-- .widget-body -->
          <?php } ?>
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
