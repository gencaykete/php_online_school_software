<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Sınav Ekle</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Sınıf</label>
								<div class="col-sm-5">
									<select class="form-control" name="exam_lesson" data-plugin="select2">
                    <?php foreach ($query as $row): ?>
                      <option value="<?=$row['lesson_class'].'[EXP]'.$row['lesson_id']?>"><?=$row['lesson_class'].'.Sınıf '.$row['lesson_name']?></option>
                    <?php endforeach; ?>
                  </select>
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Tarih</label>
								<div class="col-sm-5">
  								<input type="text" name="exam_date" id="datetimepicker5" class="form-control" data-plugin="datetimepicker" data-options="{ format: 'DD/MM/YYYY HH:mm',defaultDate:'<?=date('d/m/Y H:i',strtotime('+1 day'))?>'}">
								</div>
							</div>
              <div class="form-group">
								<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Notlar</label>
								<div class="col-sm-5">
									<select class="form-control" name="exam_view">
                    <option value="[NO]">Gizli Kalsın</option>
                    <option value="[YES]">Gösterilsin</option>
                  </select>
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
