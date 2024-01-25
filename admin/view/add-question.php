<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Soru Ekle</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div id="question-box">
                <div class="form-group">
  								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Soru</label>
  								<div class="col-sm-5">
  									<input class="form-control" type="text" name="question_text[]" placeholder="Soru" required>
  								</div>
  							</div>
                <div class="form-group">
  								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 1</label>
  								<div class="col-sm-5">
  									<input class="form-control" type="text" name="question_ansver_1[]" placeholder="Seçenek 1" required>
  								</div>
  							</div>
                <div class="form-group">
  								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 2</label>
  								<div class="col-sm-5">
  									<input class="form-control" type="text" name="question_ansver_2[]" placeholder="Seçenek 2" required>
  								</div>
  							</div>
                <div class="form-group">
  								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 3</label>
  								<div class="col-sm-5">
  									<input class="form-control" type="text" name="question_ansver_3[]" placeholder="Seçenek 3" required>
  								</div>
  							</div>
                <div class="form-group">
  								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 4</label>
  								<div class="col-sm-5">
  									<input class="form-control" type="text" name="question_ansver_4[]" placeholder="Seçenek 1" required>
  								</div>
  							</div>
                <div class="form-group">
  								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Doğru Seçenek</label>
  								<div class="col-sm-5">
  									<select class="form-control" name="question_correct_ansver[]">
                      <option value="1-sec">1. Seçenek</option>
                      <option value="2-sec">2. Seçenek</option>
                      <option value="3-sec">3. Seçenek</option>
                      <option value="4-sec">4. Seçenek</option>
                    </select>
  								</div>
  							</div>
                <div class="form-group">
  								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Soru Puanı</label>
  								<div class="col-sm-5">
  									<input class="form-control" type="number" name="question_point[]" placeholder="Soru Puanı" required>
  								</div>
  							</div>
                <hr>
              </div>

              <input type="hidden" name="submit" value="1">
              <div class="form-group text-center">
                 <button type="button" class="btn btn-info rounded" id="add-question">Soru Ekle <i class="fa fa-plus"></i> </button>
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
<script type="text/javascript">
  var soru = '<div id="question-box"><div class="form-group"><label for="#" class="col-sm-2 col-sm-offset-2 control-label">Soru</label><div class="col-sm-5"><input class="form-control" type="text" name="question_text[]" placeholder="Soru" required></div></div><div class="form-group"><label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 1</label><div class="col-sm-5"><input class="form-control" type="text" name="question_ansver_1[]" placeholder="Seçenek 1" required></div></div><div class="form-group"><label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 2</label><div class="col-sm-5"><input class="form-control" type="text" name="question_ansver_2[]" placeholder="Seçenek 2" required></div></div><div class="form-group"><label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 3</label><div class="col-sm-5"><input class="form-control" type="text" name="question_ansver_3[]" placeholder="Seçenek 3" required></div></div><div class="form-group"><label for="#" class="col-sm-2 col-sm-offset-2 control-label">Seçenek 4</label><div class="col-sm-5"><input class="form-control" type="text" name="question_ansver_4[]" placeholder="Seçenek 1" required></div></div><div class="form-group"><label for="#" class="col-sm-2 col-sm-offset-2 control-label">Doğru Seçenek</label><div class="col-sm-5"><select class="form-control" name="question_correct_ansver[]"> <option value="1-sec">1. Seçenek</option> <option value="2-sec">2. Seçenek</option> <option value="3-sec">3. Seçenek</option> <option value="4-sec">4. Seçenek</option> </select></div></div><hr></div>';
  $('#add-question').click(function(){
    $('#question-box').append(soru);
  });
</script>
