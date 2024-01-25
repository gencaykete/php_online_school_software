<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
    <form action="" enctype="multipart/form-data" method="post">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="widget">
    					<header class="widget-header">
    						<h4 class="widget-title">Site Ayarları</h4>
    					</header><!-- .widget-header -->
    					<hr class="widget-separator">
    					<div class="widget-body">
    							<div class="form-group">
    								<label for="exampleInputEmail1">Başlık</label>
    								<input type="text" class="form-control" name="settings[title]" value="<?=setting('title')?>" placeholder="Title">
    							</div>
    							<div class="form-group">
    								<label for="exampleInputPassword1">Açıklama</label>
    								<input type="text" class="form-control" name="settings[description]" value="<?=setting('description')?>" placeholder="Description">
    							</div>
    							<div class="form-group">
    								<label for="exampleInputFile">Logo</label>
    								<input type="file" name="setting[logo]" class="form-control">
    							</div>
                  <div class="form-group">
    								<label for="exampleInputFile">Favicon</label>
    								<input type="file" name="setting[favicon]" class="form-control">
    							</div>
    							<button type="submit" class="btn btn-warning rounded btn-md">KAYDET</button>
    						</form>
    				</div><!-- .widget -->
    			</div><!-- END column -->

    		</div>
        <div class="col-md-6">
          <div class="widget">
            <header class="widget-header">
              <h4 class="widget-title">Mail Ayarları</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">SMTP Host</label>
                  <input type="text" class="form-control" name="settings[smtp_host]" value="<?=setting('smtp_host')?>" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">SMTP Email</label>
                  <input type="password" class="form-control" name="settings[smtp_email]" value="<?=setting('smtp_email')?>" placeholder="Description">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">SMTP Şifre</label>
                  <input type="password" class="form-control" name="settings[smtp_password]" value="<?=setting('smtp_password')?>" placeholder="Description">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">SMTP Port</label>
                  <input type="text" class="form-control" name="settings[smtp_port]" value="<?=setting('smtp_port')?>" placeholder="Description">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">SMTP Güvenlik</label>
                  <select class="form-control" name="smtp_secure">
                    <option value="ssl" <?=setting('smtp_secure') == 'ssl' ? 'selected' : NULL ?>>SSL</option>
                    <option value="tls" <?=setting('smtp_secure') == 'tls' ? 'selected' : NULL ?>>TLS</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">SMTP GÖNDEREN MAİL ADRESİ</label>
                  <input type="text" class="form-control" name="settings[smtp_send_email]" value="<?=setting('smtp_send_email')?>" placeholder="Description">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">SMTP GÖNDEREN AD SOYAD</label>
                  <input type="text" class="form-control" name="settings[smtp_send_name]" value="<?=setting('smtp_send_name')?>" placeholder="Description">
                </div>
                <button type="submit" class="btn btn-warning rounded btn-md">KAYDET</button>
                <input type="hidden" name="submit" value="1">
              </form>
          </div><!-- .widget -->
        </div><!-- END column -->

      </div>
    	</section><!-- #dash-content -->
    </div><!-- .wrap -->
  </form>
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
