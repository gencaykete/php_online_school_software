<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Okul Bilgileri Güncelle</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-8 text-center col-sm-offset-2 control-label">
                  <img src="<?=site_url($query['user_profile'])?>" data-toggle="tooltip" title="Resim Yüklemek İçin Tıklayın" class="rounded" width="90" alt="">
                  <input class="form-control" type="file" style="visibility:hidden" onchange="$('.rounded')[0].src = window.URL.createObjectURL(this.files[0])" name="user_profile">
                </label>
              </div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Okul Adı</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="user_name" value="<?=$query['user_name']?>" placeholder="Okul Adı">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Email</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="user_email" value="<?=$query['user_email']?>" placeholder="Email">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Okul Telefon</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="user_phone" value="<?=$query['user_phone']?>" placeholder="Okul Telefon">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Okul Kullanıcı Adı</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="user_username" value="<?=$query['user_username']?>" placeholder="Okul Kullanıcı Adı">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Okul Şifre</label>
								<div class="col-sm-5">
									<input class="form-control" type="password" name="user_pass" placeholder="Okul Şifre">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Üyelik Bitiş Tarihi</label>
                <div class="col-sm-5">
									<input type="date" class="form-control" name="user_finish" value="<?=tarih($query['user_finish'])?>">
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
