<?php require admin_view('static/header'); ?>
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget p-lg row">
					<div class="col-md-12">
            <h4 class="m-b-lg">Ödevler</h4>
          </div>
					<div class="table-responsive col-md-12">
						<table class="table">
							<tr>
								<th>#</th>
								<th>Ödev Başlığı</th>
								<th>Ödev Detayı</th>
                <th>Son Gönderim Tarihi</th>
								<th>İşlemler</th>
							</tr>
							<?php $i=0; foreach ($query as $row): $i++;$total = getAll('homework_files',['file_user'=>session('user_id'),'file_homework'=>$row['homework_id']],'first');
                ?>
                <tr>
  								<td><?=$i?></td>
  								<td><?=$row['homework_title']?></td>
  								<td><?=$row['homework_detail']?></td>
                  <td><?=getFinish($row['homework_date'])=='[NO_TIME]' ? 'Ödev Süresi Bitti' : getFinish($row['homework_date'])?></td>
  								<td>
                      <?php if (getFinish($row['homework_date'])!='[NO_TIME]' && !$total): ?>
                        <a href="<?=admin_url('send-homework/'.$row['homework_id'])?>" class="btn rounded btn-info"><b>Ödev Gönder</b> <i class="fa fa-upload"></i></a>
                      <?php endif; ?>
                      <?php if ($total): ?>
                        Ödev <?=timeConvert($total['file_date'])?> Gönderildi
                      <?php endif; ?>
                  </td>
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
