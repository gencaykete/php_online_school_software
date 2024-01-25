<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Duyuru Bilgilerini Güncelle</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Duyuru Başlığı</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="notice_title" value="<?=$query['notice_title']?>" placeholder="Duyuru Başlığı">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Kime Gönderilecek</label>
								<div class="col-sm-5">
									<select class="form-control" name="notice_rank" data-plugin="select2">
                    <option value="1"<?=$query['notice_rank']==1 ? 'selected' : NULL ?>>Herkese</option>
                    <option value="3"<?=$query['notice_rank']==3 ? 'selected' : NULL ?>>Öğretmenlere</option>
                    <option value="4"<?=$query['notice_rank']==4 ? 'selected' : NULL ?>>Öğrencilere</option>
                    <option value="5"<?=$query['notice_rank']==5 ? 'selected' : NULL ?>>Velilere</option>
                  </select>
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Duyuru Detayı</label>
								<div class="col-sm-5">
									<textarea name="notice_detail" class="form-control" rows="8" cols="80" placeholder="Duyuru Detayı"><?=$query['notice_detail']?></textarea>
								</div>
							</div>
              <input type="hidden" name="submit" value="1">
              <div class="form-group text-center">
	               <button type="submit" class="btn btn-warning rounded">Kaydet</button>
              </div>

						</form>
					</div><!-- .widget-body -->
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
        <div class="copyright pull-left">Copyright RaThemes 2016 ©</div>
      </div>
    </footer>
  </div>
  <!-- /#app-footer -->
</main>
<?php require admin_view('static/footer'); ?>
