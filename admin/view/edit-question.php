<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Soru Güncelle</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Soru</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="question_text" value="<?=$query['question_text']?>" placeholder="Soru">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 1</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="question_ansver_1" value="<?=$query['question_ansver_1']?>" placeholder="Seçenek 1">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 2</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="question_ansver_2" value="<?=$query['question_ansver_2']?>" placeholder="Seçenek 2">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 3</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="question_ansver_3" value="<?=$query['question_ansver_3']?>" placeholder="Seçenek 3">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 4</label>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="question_ansver_4" value="<?=$query['question_ansver_4']?>" placeholder="Seçenek 1">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Doğru Seçenek</label>
								<div class="col-sm-5">
									<select class="form-control" name="question_correct_ansver">
                    <option value="1-sec"<?=$query['question_correct_ansver'] == '1-sec' ? 'selected' : NULL?>>1. Seçenek</option>
                    <option value="2-sec"<?=$query['question_correct_ansver'] == '2-sec' ? 'selected' : NULL?>>2. Seçenek</option>
                    <option value="3-sec"<?=$query['question_correct_ansver'] == '3-sec' ? 'selected' : NULL?>>3. Seçenek</option>
                    <option value="4-sec"<?=$query['question_correct_ansver'] == '4-sec' ? 'selected' : NULL?>>4. Seçenek</option>
                  </select>
								</div>
							</div>
              <div class="form-group">
                <label for="#" class="col-sm-2 col-sm-offset-2 control-label">Soru Puanı</label>
                <div class="col-sm-5">
                  <input class="form-control" type="number" name="question_point" value="<?=$query['question_point']?>" placeholder="Soru Puanı" required>
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
