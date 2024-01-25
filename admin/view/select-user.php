<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-12">
            <h4 class="m-b-lg">Mesaj Göndermek İstediğiniz Kullanıcıyı Seçin</h4>
          </div>
					<div class="table-responsive col-md-12">
						<table class="table">
							<tr>
								<th>#</th>
								<th>Adı & Soyadı</th>
                <th>Son Görülme</th>
								<th>İşlemler</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++; ?>
                <tr>
  								<td><?=$i?></td>
  								<td><?=$row['user_name']?></td>
                  <td><?=timeConvert($row['user_last'])?></td>
  								<td>
                    <?php if (session('user_rank')==3){ ?>
                      <a href="<?=admin_url('send-message/'.session('user_id').'/'.$row['user_id'])?>" class="btn rounded btn-info"><i class="fa fa-paper-plane"></i></a>
                    <?php }elseif (session('user_rank')==4 || session('user_rank')==5){ ?>
                      <a href="<?=admin_url('send-message/'.$row['user_id'].'/'.session('user_id'))?>" class="btn rounded btn-info"><i class="fa fa-paper-plane"></i></a>
                    <?php } ?>
  							</tr>
              <?php endforeach; ?>
						</table>
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
