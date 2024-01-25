<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Sağlık Bilgisi Ekle</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Öğrenci</label>
								<div class="col-sm-5">
                  <select class="form-control" name="ill_student">
                    <option disabled selected>Öğrenci Seçin</option>
                    <?php foreach ($student as $row): ?>
                      <option value="<?=$row['user_id']?>"><?=$row['user_name']?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Şikayet</label>
								<div class="col-sm-5">
                  <input type="text" name="ill_complaint" class="form-control" placeholder="Şikayet" value="">
                </div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">İlgilenen Yetkili</label>
								<div class="col-sm-5">
                  <input type="text" name="ill_doctor" class="form-control" placeholder="İlgilenen Yetkili" value="">
                </div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Tanı</label>
								<div class="col-sm-5">
                  <textarea name="ill_detail" class="form-control" placeholder="Tanı" rows="8" cols="80"></textarea>
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
