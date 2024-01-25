<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main in">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Online Sınav Sistemi</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="" method="post" class="form-horizontal">
              <?php if ($step=='0'){ ?>
                <div class="col-md-12 text-center">
                  <h3>Merhaba <?=$user['user_name'].' '.$query['lesson_name'].' Sınavına Hoşgeldiniz.'?></h3>
                  <h4>Sınavınız Aşağıdaki Butona Bastığınızda Başlayacaktır.</h4>
                </div><br>
                <div class="form-group text-center">
                    <a href="<?=admin_url('exam/'.route(2).'/1')?>" class="btn btn-success rounded" style="margin-top:1.25rem">Başla</a>
                </div>
              <?php }elseif($step=='finish' && !isset($error)){?>
                <div class="col-md-12 text-center">
                  <h3>Sınav Bitti</h3>
                  <h4>Merhaba <?=$user['user_name']?> Sınavının Notunu Açıklandığında Size Bildirim Gelecektir.</h4>
                </div><br>
                <div class="form-group text-center">
                    <a href="<?=admin_url('exams')?>" class="btn btn-success rounded" style="margin-top:1.25rem">Sınavlara Dön</a>
                </div>
              <?php }elseif(!isset($error)){ ?>
                <div class="form-group">
  								<h4 for="#" class="col-sm-6 col-md-offset-3"><?=$step?> - <?=$soru['question_text']?> <b class="text-danger">(<?=$soru['question_point']?> Puan)</b> </h4><br><br>
                  <div class="col-sm-6 col-md-offset-3 radio radio-primary" style="padding-left:30px;">
										<input type="radio" name="question_ansver" required id="ansver_1" value="1-sec">
										<label for="ansver_1"><?=$soru['question_ansver_1']?></label>
									</div>
                  <div class="col-sm-6 col-md-offset-3 radio radio-primary" style="padding-left:30px;">
										<input type="radio" name="question_ansver" required id="ansver_2" value="2-sec">
										<label for="ansver_2"><?=$soru['question_ansver_2']?></label>
									</div>
                  <div class="col-sm-6 col-md-offset-3 radio radio-primary" style="padding-left:30px;">
										<input type="radio" name="question_ansver" required id="ansver_3" value="3-sec">
										<label for="ansver_3"><?=$soru['question_ansver_3']?></label>
									</div>
                  <div class="col-sm-6 col-md-offset-3 radio radio-primary" style="padding-left:30px;">
										<input type="radio" name="question_ansver" required id="ansver_4" value="4-sec">
										<label for="ansver_4"><?=$soru['question_ansver_4']?></label>
									</div>
                  <?php if ($step!=$max_step){ ?>
                    <div class="col-md-6 col-md-offset-3 text-center" style="margin-top:1.75rem">
                      <button type="submit" class="btn btn-warning">Sonraki Soru</button>
                    </div>
                  <?php }else{ ?>
                    <div class="col-md-6 col-md-offset-3 text-center" style="margin-top:1.75rem">
                      <button type="submit" class="btn btn-danger">Sınavı Bitir</button>
                    </div>
                  <?php } ?>
  							</div>
              <?php } ?>


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
